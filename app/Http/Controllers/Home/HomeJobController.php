<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Experience;
use App\Models\Industry;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\JobFunction;
use App\Models\JobLevel;
use App\Models\Qualification;
use App\Models\Salary;
use App\Models\State;
use App\Models\WorkType;
use Illuminate\Http\Request;

class HomeJobController extends Controller
{

    public function jobList(){

        $data = [
            'jobs'              => Job::all(),
            'workTypes'         => WorkType::all(),
            'qualifications'    => Qualification::all(),
            'experiences'       => Experience::all(),
            'salaries'          => Salary::all(),
            'jobLevels'         =>JobLevel::all(),
        ];

        return view('job-list', $data);
    }

    public function jobListGrid(){

        return view('job-grid');
    }

    public function show(Job $job){

        $hasApplied = JobApplication::where('job_id',$job->id)
            ->where('applicant_id', auth()->user()?->applicant?->id)
            ->first();


        return view('job-details',compact('job', 'hasApplied'));
    }
}
