<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Industry;
use App\Models\Job;
use App\Models\JobFunction;
use App\Models\Qualification;
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


    public function __construct()
    {
        $this->industry = new Industry();
        $this->workType = new WorkType();
        $this->jobFunction = new JobFunction();
        $this->currency = new Currency();
        $this->state = new State();
        $this->qualification = new Qualification();
        $this->qualification = new Expe();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs.index')->with('jobs', Job::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'industries' => $this->industry,
            'industries' => $this->industry,
            'industries' => $this->industry,
            'industries' => $this->industry
        ];
        return view('jobs.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
