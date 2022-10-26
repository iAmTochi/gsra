<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Job;
use App\Models\JobApplication;

class JobApplicantController extends Controller
{
    public function index($id)
    {

        $job = Job::findOrFail($id);
        $applications = JobApplication::where('job_id', $job->id)->get();
        $jobTitle = $job->title;

        return view('employer.manage-applicants', compact('applications','jobTitle'));
    }


    public function sendMessages($userId)
    {
        Conversation::firstOrCreate([
            'sender_id' => auth()->id(),
            'receiver_id' => $userId
        ]);

        return to_route('employer.messages');
    }


}
