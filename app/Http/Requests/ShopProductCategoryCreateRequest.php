<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopProductCategoryCreateRequest extends FormRequest
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
            'title' => 'required|min:4|max:200|unique:shop_product_categories,title',
            'slug' => 'max:200|unique:shop_product_categories,slug',
            'description' => 'max:500',
            'parent_id' => 'required|integer'
        ];
    }
}
