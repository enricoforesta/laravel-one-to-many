<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'title' => ['required', 'max:50', Rule::unique('projects')->ignore($this->project)],
            'status' => 'required|max:20',
            'description' => 'nullable',
            'frameworks' => 'nullable|max:40',
            'language' => 'nullable|max:30',
            'start_date' => 'required',
            // 'slug' => 'required',
        ];
    }
    public function messages()
    {
        return [

            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i :max caratteri.',
            'status.required' => 'Lo stato è obbligatorio.',
            'status.max' => 'Lo stato non può superare i :max caratteri.',
            'language.required' => 'Il linguaggio è obbligatorio.',
            'language.max' => 'Il linguaggio non può superare i :max caratteri.',
            'start_date.required' => 'La data è obbligatoria.',
        ];
    }
}
