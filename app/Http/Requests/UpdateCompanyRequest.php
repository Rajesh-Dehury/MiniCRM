<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:companies,email,' . $this->company->id,
            'website' => 'required|url|max:255',
            'logo' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048|dimensions:max_width=150,max_height=150',
        ];
    }
}
