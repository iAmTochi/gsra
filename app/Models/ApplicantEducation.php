<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantEducation extends Model
{
    use HasFactory;

    protected $fillable = [

        'resume_id',
        'institution',
        'qualification',
        'started_at',
        'graduated_at',
    ];

    protected $dates = ['started_at','graduated_at'];
}
