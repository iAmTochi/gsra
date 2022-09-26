<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicantController extends Controller
{
    public function index($id){

        $job = Job::findOrFail($id);
        $applications = JobApplication::where('job_id', $job->id)->get();
        $jobTitle = $job->title;


        return view('employer.manage-applicants', compact('applications','jobTitle'));
    }
}
