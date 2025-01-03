<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredientRequest extends FormRequest
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
            'ingredient_name' => 'required|string|min:3|max:255',
            'ingredient_manufacturer' => 'nullable|string|max:255',
            'ingredient_supplier' => 'nullable|string|max:255',
            'unit_price' => 'required',
            'seccondary_ingredients' => 'nullable|array',
            'ingredient_allergens' => 'nullable|array'
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
            'name' => trans('crud.ingredient.fields.name'),
            'manufacturer' => trans('crud.ingredient.fields.manufacturer'),
            'supplier' => trans('crud.ingredient.fields.supplier'),
            'unit_price' => trans('crud.ingredient.fields.price'),
            'nutritional_values' => trans('crud.ingredient.fields.nutritional_information'),
            'seccondary_ingredients' => trans('crud.ingredient.fields.seccondary_ingredients'),
            'ingredient_allergens' => trans('crud.ingredient.fields.allergens'),
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
