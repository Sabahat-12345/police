<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComplainAgainstPoliceRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'contact_method' => 'required|in:email,phone,postal-mail,no-contact',
            'incident_date' => 'required|date|before_or_equal:today',
            'location' => 'required|string|max:255',
            'officer_details' => 'required|string|max:1000',
            'description' => 'required|string|max:255',
            'evidence' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,mp4|max:5120',
            'witness_info' => 'required|string|max:1000',
            'info_confirm' => 'accepted',
        ];
    }
    /**info_confirm
     * Get the custom messages for validation errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Complainant Name is required.',
            'contact_method.required' => 'Preferred Contact Method is required.',
            'contact_method.in' => 'Please select a valid contact method.',
            
            'incident_date.required' => 'Date of Incident is required.',
            'incident_date.date' => 'Date of Incident must be a valid date.',
            'incident_date.before_or_equal' => 'Date of Incident cannot be in the future.',

            'location.required' => 'Location of Incident is required.',
            'officer_details.required' => 'Officer Details are required.',
            'description.required' => 'Detailed Description is required.',
            'evidence.required' => 'Please upload supporting evidence.',
            'evidence.file' => 'Evidence must be a valid file.',
            'evidence.mimes' => 'Evidence must be one of the following types: jpg, jpeg, png, pdf, doc, docx, mp4|max:5120.',
            'evidence.max' => 'Evidence must not exceed 50MB.',

            'witness_info.required' => 'Witness Information is required.',
            'info_confirm.accepted' => 'You must confirm that the information is accurate.',
        ];
    }
}
