<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'job_summary',
        'job_function_id',
        'industry_id',
        'work_type_id',
        'job_level_id',
        'state_id',
        'min_qualification',
        'experience',
        'currency_id',
        'monthly_salary',
        'openings',
        'author',
        'feature_days',
        'is_closed',
    ];

    protected $dates = ['feature_days'];

    public function jobPosts(){

        if(auth()->user()->role == User::EMPLOYER){
            $jobs = $this->where('author', auth()->user()->id)->get();
        }
        if(auth()->user()->role == User::ADMIN){
            $jobs = $this->get();
        }

      return  $jobs;
    }

    public function applicants(){

        return $this->hasMany(Applicant::class);
    }


    public function workType(){

        return  $this->belongsTo(WorkType::class);
    }

    public function currency(){

        return  $this->belongsTo(Currency::class);
    }
    public function salary(){

        return  $this->belongsTo(Salary::class,'monthly_salary','id');
    }

    public function country(){

        return  $this->belongsTo(Country::class);
    }
    public function state(){

        return  $this->belongsTo(State::class);
    }

    public function recruiter(){

        return  $this->belongsTo(Recruiter::class,'author','user_id');
    }

    public function jobApplications() {
        
        return $this->hasMany(JobApplication::class);
    }


}
