<?php

namespace App\Http\Controllers;

use App\Http\Requests\Resume\CreateResumeRequest;
use App\Models\ApplicantEducation;
use App\Models\ApplicantExperience;
use App\Models\ApplicantSkill;
use App\Models\JobFunction;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobFunctions = JobFunction::all();

        return  view('applicant.add-resume',compact('jobFunctions'));
    }

    /**
     * @param CreateResumeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateResumeRequest $request)
    {

        $data=[
            'applicant_id'        => auth()->user()->applicant->id,
            'title'               => $request->title,
            'job_function_id'     => $request->job_function_id,
            'about_me'            => $request->about_me,
        ];

        if($request->has('doc')){
            $data['doc'] = $request->doc;
        }
        if($request->has('passport')){

            $data['passport'] = $request->passport;
        }



        $resume =  Resume::create($data);

        $count= count($request->school);
        for($i=0;$i<$count; $i++){
            ApplicantEducation::create([
                'resume_id'     =>  $resume->id,
                'institution'   =>  $request->school[$i],
                'qualification' =>  $request->qualification[$i],
                'started_at'    =>  $request->state_date[$i],
                'graduated_at'  =>  $request->school_end_date[$i],
            ]);
        }

        $counte= count($request->employer);
        for($i=0; $i < $counte; $i++){
            ApplicantExperience::create([

                'resume_id' => $resume->id,
                'employer' => $request->employer[$i],
                'job_title' => $request->job_title[$i],
                'started_at' => $request->job_start_date[$i],
                'location' => $request->location[$i],
                'responsibilities' => $request->responsibility[$i],
            ]);
        }

        $counts = count($request->skill_name);
        for($i=0; $i < $counts; $i++){
            ApplicantSkill::create([
                'resume_id' => $resume->id,
                'name' => $request->skill_name[$i],
            ]);
        }




        session()->flash('success',  "Your resume has been created successfully");

        return to_route('applicant.dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = auth()->user()->applicant->resume->id;

        $resume = Resume::find($id);
        $jobFunctions = JobFunction::all();


        return view('applicant.update-resume', compact('resume','jobFunctions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
