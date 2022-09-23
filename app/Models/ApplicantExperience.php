<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id' ,
        'employer',
        'job_title' ,
        'started_at',
        'location' ,
        'responsibilities'
    ];

    protected $dates = ['started_at','resigned_at'];

}
