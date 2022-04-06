<?php

namespace Laravel\Fortify\Listeners;

use Laravel\Fortify\Events\TwoFactorAuthenticationChallenged;
use Laravel\Fortify\Events\TwoFactorAuthenticationEnabled;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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
        app(AuthenticatedSessionController::class)->sendTOTPNotification(null, $event->user);
    }
}
