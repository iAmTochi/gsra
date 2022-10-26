<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store($userId)
    {
        Conversation::firstOrCreate([
            'sender_id' => auth()->id,
            'receiver_id' => $userId
        ]);

        return to_route('c');
    }

}
