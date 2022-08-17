<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    const ADMIN     = 'admin';
    const DEVELOPER = 'developer';
    const EMPLOYER  = 'employer';
    const APPLICANT = 'applicant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'is_banned',
        'role',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function admin(){
        return $this->belongsTo(Admin::class,'id','user_id');
    }

    public function employer(){
        return $this->belongsTo(Recruiter::class,'id', 'user_id');
    }


    public function isDeveloper(): bool
    {

        return $this->role === self::DEVELOPER;
    }
    public function isAdmin(): bool
    {

        return $this->role === self::ADMIN;
    }

    public function isEmployer(): bool
    {

        return $this->role === self::EMPLOYER;
    }
    public function isApplicant(): bool
    {

        return $this->role === self::APPLICANT;
    }
}
