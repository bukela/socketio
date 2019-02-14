<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function send_message() {

        $user = \App\User::first();
        $message = \App\Message::create([
            'user_id' => $user->id,
            // 'content' => $this->argument('content')
            'content' => 'message sent from controller'
        ]);

        event(new \App\Events\ChatMessageWasReceived($message, $user));

    }
}
