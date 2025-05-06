<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class ReadyCompanyMailRequest extends FormRequest
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
            'rc_topic' => 'required',
            'rc_contact' => 'required',
            'rc_message' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'rc_message' => 'Wiadomość',
            'rc_contact' => 'E-mail / Nr. telefonu',
        ];
    }
}
