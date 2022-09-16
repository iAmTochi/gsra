<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Currency;
use App\Models\Job;
use App\Models\Recruiter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function adminDashboard(Job $job)
    {
        $jobs       = $job->jobPosts()->count();
        $recruiters = Recruiter::count();
        $applicants = Applicant::count();
        $currency   = Currency::where('id',1)->first();

        return view('admin.dashboard', compact('jobs','recruiters', 'applicants','currency'));
    }

    public function employerDashboard(Job $job){

        $jobs       = $job->jobPosts()->count();

        return view('employer.dashboard', compact('jobs'));
    }

    public function applicantDashboard(){

    }


}
