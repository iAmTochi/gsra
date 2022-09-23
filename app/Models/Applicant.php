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
        'gender',
        'image',
        'qualification_id',
        'current_job_role',
        'current_job_role',
        'country_id','state_id',
        'resume_id',
        'availability_id',
    ];

    public function country(){

        return  $this->belongsTo(Country::class);
    }
    public function state(){

        return  $this->belongsTo(State::class);
    }

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function resume(){

        return $this->hasOne(Resume::class);

    }

}
