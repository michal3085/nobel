<?php

namespace App\Http\Requests\Newsletter;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterStoreRequest extends FormRequest
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
            'newsletter_body' => 'required',
            'newsletter_subject' => 'required|unique:newsletter,newsletter_subject',
            'newsletter_active' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'newsletter_body' => 'Treść',
            'newsletter_subject' => 'Temat',
            'newsletter_active' => 'Status',
        ];
    }
}
