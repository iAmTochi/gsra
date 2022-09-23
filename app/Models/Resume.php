<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;


    protected $fillable = [
        'applicant_id',
        'title',
        'job_function_id',
        'about_me',
        'doc',
        'passport',

    ];


    public function applicant(){

        return $this->belongsTo(Applicant::class);

    }

    public function educations(){

        return $this->hasMany(ApplicantEducation::class);

    }

    public function experiences(){

        return $this->hasMany(ApplicantExperience::class);

    }
    public function skills(){

        return $this->hasMany(ApplicantSkill::class);

    }


}
