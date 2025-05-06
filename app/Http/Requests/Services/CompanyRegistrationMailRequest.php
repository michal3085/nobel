<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRegistrationMailRequest extends FormRequest
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
            'cr_topic' => 'required',
            'cr_contact' => 'required',
            'cr_message' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'cr_message' => 'Wiadomość',
            'cr_contact' => 'E-mail / Nr. telefonu',
        ];
    }
}
