<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;


    protected $fillable = [
        'applicant_id',
        'resume_data',
        'doc',
    ];

    protected $casts = [
        'resume_data' => 'array'
    ];
}
