<?php

namespace App\Http\Requests\Submission;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SubmissionStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'      => 'required|max:255',
            'email'     => 'required|max:255',
            'message'   => 'required',
        ];
    }
}

