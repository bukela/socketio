<?php

namespace App\Broadcasting;

use App\User;

class ExampleBroadcastChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\User  $user
     * @return array|bool
     */
    public function join(User $user, Team $team)
    {
        return $user->teams()->find($teamId) ? true : false;
    }
}
