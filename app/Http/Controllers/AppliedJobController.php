<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;

class AppliedJobController extends Controller
{
    public function index(){

        $id = auth()->user()->applicant->id;
        $appliedJobs = JobApplication::where('applicant_id', $id)->get();

        return view('applicant.applied-jobs', compact('appliedJobs') )->withCount(0);
    }
}
