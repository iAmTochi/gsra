<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'last_name',
        'first_name',
        'phone',
        'dob',
        'gender','image',
        'qualification_id',
        'current_job_role',
        'current_job_role',
        'country_id','state_id',
        'resume_id',
        'availability_id',
    ];
}
