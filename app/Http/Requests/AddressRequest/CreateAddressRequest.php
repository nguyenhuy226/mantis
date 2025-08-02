<?php

namespace App\Http\Requests\AddressRequest;

use Illuminate\Foundation\Http\FormRequest;

class CreateAddressRequest extends FormRequest
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
            'province' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'ward' => 'required|string|max:100',
            'phone' => 'required|string|max:11',
            'name' => 'required|string|max:100',
            'address' => 'required|string|max:100',
            'default' => 'nullable|boolean',
        ];
    }
}
