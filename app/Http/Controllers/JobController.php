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
    protected $industry;
    protected $workType;
    protected $jobFunction;
    protected $currency;
    protected $state;
    protected $qualification;
    protected $experience;
    protected $salary;
    protected $jobLevel;
    protected $job;


    public function __construct()
    {
        $this->industry = new Industry();
        $this->workType = new WorkType();
        $this->jobFunction = new JobFunction();
        $this->currency = new Currency();
        $this->state = new State();
        $this->qualification = new Qualification();
        $this->experience = new Experience();
        $this->salary = new Salary();
        $this->jobLevel = new JobLevel();
        $this->job = new Job();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'jobs' => $this->job->myJobPost()
        ];
        return view('jobs.employer.index',$data)->withCount(0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'industries'    => $this->industry->all(),
            'workTypes'     => $this->workType->all(),
            'jobFunctions'  => $this->jobFunction->all(),
            'currencies'    => $this->currency->all(),
            'states'        => $this->state->all(),
            'qualifications'    => $this->qualification->all(),
            'experiences'       => $this->experience->all(),
            'salaries'          => $this->salary->all(),
            'jobLevels'         => $this->jobLevel->all(),
        ];
        return view('jobs.employer.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateJobRequest $request)
    {

        //dd($request->all());
        //

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

        $storeJob = $this->job->create($data);

        session()->flash('success',  "Job post added successfully");

        return view('jobs.employer.index');


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
            'industries'    => $this->industry->all(),
            'workTypes'     => $this->workType->all(),
            'jobFunctions'  => $this->jobFunction->all(),
            'currencies'    => $this->currency->all(),
            'states'        => $this->state->all(),
            'qualifications'    => $this->qualification->all(),
            'experiences'       => $this->experience->all(),
            'salaries'          => $this->salary->all(),
            'jobLevels'         => $this->jobLevel->all(),
            'job' => $job
        ];
        return view('jobs.employer.edit', $data);
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

        $updateJob = $job->update($data);


//        if ($job->isClean()) {
//            session()->flash('info',  "You have made no changes!");
//            return redirect()->back();
//        }
        session()->flash('success',  "Job post updated successfully");

        return redirect()->route('jobs.index');
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
