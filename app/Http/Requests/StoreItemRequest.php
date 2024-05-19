<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:55',
            'slug' => 'nullable|string|max:100',
            'type' => 'nullable|string|max:50',
            'category' => 'nullable|string|max:50',
            'weight' => 'nullable|string|max:20',
            'cost' => 'nullable|string|max:20',
            'damage_dice' => 'nullable|string|max:20',
        ];
    }
}
