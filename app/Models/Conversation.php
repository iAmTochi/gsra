<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    public function messages()
    {
        $this->hasMany(Message::class);
    }

    public function sender()
    {
        $this->belongsTo(User::class);
    }

    public function receiver()
    {
        $this->belongsTo(User::class);
    }
}
