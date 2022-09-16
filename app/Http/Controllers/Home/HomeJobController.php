<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
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

class HomeJobController extends Controller
{

//    protected $jobLevel;
//    protected $job;
//    protected $workType;
//    protected $jobFunction;
//    protected $currency;
//    protected $state;
//    protected $qualification;
//    protected $experience;
//    protected $salary;



    public function __construct()
    {
//        $this->jobLevel = new JobLevel();
//        $this->job = new Job();
//        $this->workType = new WorkType();
//        $this->jobFunction = new JobFunction();
//        $this->currency = new Currency();
//        $this->state = new State();
//        $this->qualification = new Qualification();
//        $this->experience = new Experience();
//        $this->salary = new Salary();

    }

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
}
