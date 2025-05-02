<?php

namespace App\Http\Requests\Newsletter;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewsletterUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'newsletter_body' => 'required',
            'newsletter_subject' => [
                'required',
                Rule::unique('newsletter', 'newsletter_subject')->ignore($this->newsletter->newsletter_id, 'newsletter_id')
            ],
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
