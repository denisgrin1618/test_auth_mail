<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Verified;
use App\UserRegistrationLog;

class LogUserMailVerification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        $user_registration_log = new UserRegistrationLog;
        $user_registration_log->user()->associate($event->user);
        $user_registration_log->email_verified_at = now();
        $user_registration_log->save();
    }
}
