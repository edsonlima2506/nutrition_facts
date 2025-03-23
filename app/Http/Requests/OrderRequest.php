<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'recipe_id' => 'required|integer|exists:recipes,id',
            'start' => 'required|date',
            'finish' => 'nullable|date|after_or_equal:start',
            'user_id' => 'required|integer|exists:users,id',
            'quantity' => 'nullable|numeric|min:0',
            'final_weight' => 'nullable|numeric|min:0',
            'fractionation' => 'nullable|string|max:255',
            'purpose' => 'nullable|string|max:255',
            'obs' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
