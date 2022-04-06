<?php

namespace Laravel\Fortify\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Laravel\Fortify\Enums\TwoFactorChannel;

class EnableTwoFactorAuthenticationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'channel' => 'required', [new Enum(TwoFactorChannel::class)],
            'phone' => 'required_if:channel,'.TwoFactorChannel::TOTP_SMS->value.'|string',
        ];
    }
}
