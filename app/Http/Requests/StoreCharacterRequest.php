<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
            'full_name' => 'required|min:2|max:55',
            'race' => 'required|min:3|max:20',
            'class' => 'required|min:3|max:20',
            'level' => 'nullable|integer|min:1|max:20',
            'background' => 'nullable|min:3|max:100',
            'alignment' => 'nullable|min:3|max:20',
            'strength' => 'nullable|integer|min:1|max:30',
            'dexterity' => 'nullable|integer|min:1|max:30',
            'constitution' => 'nullable|integer|min:1|max:30',
            'intelligence' => 'nullable|integer|min:1|max:30',
            'wisdom' => 'nullable|integer|min:1|max:30',
            'charisma' => 'nullable|integer|min:1|max:30',
            'backstory' => 'nullable|max:1500',
        ];
    }
}
