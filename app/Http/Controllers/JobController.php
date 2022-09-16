<?php

namespace App\Http\Controllers;

use App\Http\Requests\Job\CreateJobRequest;
use App\Models\Currency;
use App\Models\Experience;
use App\Models\Industry;
use App\Models\Job;
use App\Models\JobFunction;
use App\Models\JobLevel;
use App\Models\Qualification;
use App\Models\Salary;
use App\Models\State;
use App\Models\WorkType;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Job $job)
    {
          $jobs   = $job->jobPosts();

        return view('employer.jobs.index',compact('jobs'))->withCount(0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'industries'    => Industry::all(),
            'workTypes'     => WorkType::all(),
            'jobFunctions'  => JobFunction::all(),
            'currencies'    => Currency::all(),
            'states'        => State::all(),
            'qualifications'    => Qualification::all(),
            'experiences'       => Experience::all(),
            'salaries'          => Salary::all(),
            'jobLevels'         => JobLevel::all(),
        ];
        return view('employer.jobs.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateJobRequest $request)
    {


        $data = [
            'title'             => $request->title,
            'job_summary'       => $request->description,
            'job_function_id'   => $request->job_function,
            'industry_id'       => $request->industry,
            'work_type_id'      => $request->work_type,
            'job_level_id'      => $request->job_level,
            'state_id'          => $request->state,
            'min_qualification' => $request->qualification,
            'experience'        => $request->experience,
            'currency_id'       => 1,
            'monthly_salary'    => $request->expected_salary,
            'openings'          => $request->opening,
            'author'            => auth()->user()->id,
            'feature_days'      => $request->deadline,
            'is_closed'         => false
        ];

        Job::create($data);

        session()->flash('success',  "Job post added successfully");

        return to_route('jobs.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {

        $data = [
            'industries'    => Industry::all(),
            'workTypes'     => WorkType::all(),
            'jobFunctions'  => JobFunction::all(),
            'currencies'    => Currency::all(),
            'states'        => State::all(),
            'qualifications'    => Qualification::all(),
            'experiences'       => Experience::all(),
            'salaries'          => Salary::all(),
            'jobLevels'         => JobLevel::all(),
            'job'               => $job
        ];

        return view('employer.jobs.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(CreateJobRequest $request, Job $job)
    {
        $data = [
            'title'             => $request->title,
            'job_summary'       => $request->description,
            'job_function_id'   => $request->job_function,
            'industry_id'       => $request->industry,
            'work_type_id'      => $request->work_type,
            'job_level_id'      => $request->job_level,
            'state'             => $request->state,
            'min_qualification' => $request->qualification,
            'experience'        => $request->experience,
            'currency_id'       => 1,
            'monthly_salary'    => $request->expected_salary,
            'openings'          => $request->opening,
            'author'            => auth()->user()->id,
            'feature_days'      => $request->deadline,
            'is_closed'         => false
        ];

       $job->update($data);

        session()->flash('success',  "Job post updated successfully");

        return to_route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        if ($job->trashed()){
            $job->forceDelete();
            session()->flash('success', 'Job Post Deleted successfully');

        } else {

            $job->delete();
            session()->flash('success', 'Job Post trashed successfully');

        }

        return redirect()->back();
    }
}
