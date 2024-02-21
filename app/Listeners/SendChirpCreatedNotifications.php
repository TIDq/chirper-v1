<?php

namespace App\Listeners;

use App\Events\ChirpCreated;
use App\Models\User;
USE App\Notifications\NewChirp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendChirpCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ChirpCreated $event): void
    {
        foreach (User::whereNot('id', $event->chirp->user->id)->get() as $user) {
            $user->notify(new NewChirp($event->chirp));
        }
    }
}
