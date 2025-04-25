<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
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
            'fullName'     => 'required|string|max:255|min:3',
            'email'        => 'required|email',
            'phone'        => 'required|string|max:50|min:10',
            'cnic'         => 'required|string|max:25|min:17',
            'dob'          => 'required|date|before:today',
            'jobPosition'  => 'required|in:Police Constable,Sub-Inspector,IT Officer',
            'education'    => 'required|string|max:255',
            'experience'   => 'nullable|string',
            'resume'       => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            ];
        }
    
        /**
         * Get the custom messages for validation errors.
         *
         * @return array<string, string>
         */
        public function messages(): array
        {
            return [
                'fullName.required' => 'Full Name is required.',
                'email.required' => 'Email is required.',
                'phone.required' => 'Phone number is required.',
                'cnic.required' => 'CNIC is required.',
                'dob.required' => 'Date of Birth is required.',
                'jobPosition.required' => 'Job Position is required.',
                'education.required' => 'Education is required.',       
                // Add more custom messages as needed
            ];
    }
}
