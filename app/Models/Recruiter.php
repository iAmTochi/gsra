<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Recruiter extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone',
        'company_name',
        'contact_person',
        'notification_email',
        'address',
        'industry_id',
        'company_capacity_id',
        'recruiter_position_id',
        'state_id',
        'country_id',
        'referrals',
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
}
