<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendChatMessage extends Command
{
    protected $signature = 'chat:message {content}';

    protected $description = 'Send chat message.';

    public function handle()
    {
        // Fire off an event, just randomly grabbing the first user for now
        $user = \App\User::first();
        $message = \App\Message::create([
            'user_id' => $user->id,
            'content' => $this->argument('content')
        ]);

        event(new \App\Events\ChatMessageWasReceived($message, $user));
    }
}
