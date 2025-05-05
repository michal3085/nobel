<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ns_mail_address' => 'required|email|unique:newsletter_subscribers,ns_mail_address',
        ];
    }

    public function attributes()
    {
        return [
            'ns_mail_address' => 'Adres e-mail',
        ];
    }
}
