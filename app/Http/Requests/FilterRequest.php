<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "price_from" => 'numeric|min:1',
            "price_to" => 'numeric|min:1',
            "categories" => 'array',
            "categories.*" => 'integer|exists:categories,id',
            "brands" => 'array',
            "brands.*" => 'integer|exists:brands,id',
            "sort" => 'numeric|min:1|max:4',
        ];
    }
}
