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

    public function applicant(){

        return $this->belongsTo(Applicant::class,'id', 'user_id');
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


    public function authFullName(){

        if($this->isAdmin()){

          $name =  auth()->user()->admin->first_name.' '.auth()->user()->admin->last_name;
        }

        if($this->isEmployer()){

            $name =  auth()->user()->employer->first_name.' '.auth()->user()->employer->last_name;
        }

        if($this->isApplicant()){

            $name =  auth()->user()->applicant->first_name.' '.auth()->user()->applicant->last_name;
        }

        return $name;
    }


    public function fullName()
    {

        if($this->isAdmin()){

          $name =  $this->admin->first_name.' '.$this->admin->last_name;
        }

        if($this->isEmployer()){

        $name =  $this->employer->first_name.' '.$this->employer->last_name;

        }

        if($this->isApplicant()){

            $name =  $this->applicant->first_name.' '.$this->applicant->last_name;
        }


        return $name;
    }

    public function firstName()
    {

        if($this->isAdmin()){

          $name =  $this->admin->first_name;
        }

        if($this->isEmployer()){

        $name =  $this->employer->first_name;

        }

        if($this->isApplicant()){

            $name =  $this->applicant?->first_name;
        }


        return $name;
    }

    public function lastName()
    {

        if($this->isAdmin()){

            $name =   $this->admin->last_name;
        }

        if($this->isEmployer()){

        $name = $this->employer->last_name;

        }

        if($this->isApplicant()){

            $name =  $this->applicant?->last_name;
        }


        return $name;
    }

//    public function country(){
//
//        return  $this->belongsTo(Country::class,'');
//    }
//    public function state(){
//
//        return  $this->belongsTo(State::class);
//    }

    public function location(){

        if($this->isEmployer()) {
            $location = ucfirst(strtolower($this->employer->state->name)) . ', ' . strtoupper($this->employer->country->alpha_2_code);
        }

        if($this->isAdmin()) {
            $location = strtoupper('Nigeria');
        }

        if($this->isApplicant()) {
            $location = ucfirst(strtolower($this->applicant->state->name??Null)) . ', ' . strtoupper($this->applicant->country->alpha_2_code??Null);
        }
        return  $location;
    }




}
