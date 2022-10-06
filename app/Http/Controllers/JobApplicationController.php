<?php

namespace App\Http\Controllers;


use App\Models\Job;
use App\Models\JobApplication;
use App\Models\User;
use App\Notifications\AdminJobApplied;
use App\Notifications\ApplicantJobApplied;
use App\Notifications\EmployerJobApplied;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class JobApplicationController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = Job::findOrFail($request->_job_id);


        $data = [
            'job_id' => $job->id,
            'applicant_id' => auth()->user()->applicant->id,
            'cover_letter' => $request->cover_letter
        ];

        if ($request->hasFile('doc')) {

            $request->validate(['doc' => 'mimes:doc,pdf,docx']);

            $docPath = $request->file('doc')->store('resumes');

            $data['doc'] = $docPath;
        }

        $jobApplication = JobApplication::create($data);


        auth()->user()->notify(new ApplicantJobApplied($jobApplication));

        $jobApplication->job->recruiter->user->notify(new EmployerJobApplied($jobApplication));

        $admins = User::where('role', User::ADMIN)->get('email');

        Notification::send($admins, new AdminJobApplied($jobApplication));




        session()->flash('success',  "Your job application was successful!");

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function show(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplication $jobApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplication $jobApplication)
    {
        //
    }
}
