<?php

namespace Laravel\Fortify\Enums;

enum TwoFactorChannel: string
{
    case TOTP_APP = 'TOTP_APP';

    case TOTP_SMS = 'TOTP_SMS';

    case TOTP_EMAIL = 'TOTP_EMAIL';
}
