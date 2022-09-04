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
        'state',
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

    public function myJobPost(){

        if(auth()->user()->role == User::EMPLOYER){
            $jobs = $this->where('author', auth()->user()->id)->get();
        }
        if(auth()->user()->role == User::ADMIN){
            $jobs = $this->get();
        }

      return  $jobs;
    }
}
