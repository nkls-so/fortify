<?php

namespace Laravel\Fortify\Listeners;

use Laravel\Fortify\Events\TwoFactorAuthenticationChallenged;
use Laravel\Fortify\Events\TwoFactorAuthenticationEnabled;

class SendTOTPNotification
{
    /**
     * Handle the event.
     *
     * @param TwoFactorAuthenticationEnabled|TwoFactorTwoFactorAuthenticationChallenged $event
     *
     * @return void
     */
    public function handle(TwoFactorAuthenticationEnabled|TwoFactorAuthenticationChallenged $event)
    {
        app('fortify-extension')->sendTOTPNotification(null, $event->user);
    }
}
