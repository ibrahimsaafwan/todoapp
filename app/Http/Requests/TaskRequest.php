<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date|after_or_equal:today',
            'status' => 'required|in:pending,completed',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title must not exceed 255 characters.',
            'due_date.required' => 'The due date field is required.',
            'due_date.after_or_equal' => 'The due date must be today or a future date.',
            'status.required' => 'The status field is required.',
            'status.in' => 'The status must be either pending or completed.',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Task Title',
            'description' => 'Task Description',
            'due_date' => 'Due Date',
            'status' => 'Task Status',
        ];
    }
}
