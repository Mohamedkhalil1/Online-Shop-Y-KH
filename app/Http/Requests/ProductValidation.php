<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50',
            'category_id' =>'required|exists:categories,id',
            'price'       => 'required|numeric|min:1',
            'price_discount' => 'nullable|numeric|min:1',
            'photo'          => 'required_without:id|image|mimes:jpeg,jpg,png',
            'description' => 'required|max:5000'
        ];
    }

    public function messages(){
        return[
            'name.required' => trans('admin/products.name_validate'),
            'name.min'      => trans('admin/products.name_min_validate'),
            'name.max'      => trans('admin/products.name_max_validate'),
            'category_id.required'=> trans('admin/products.name_max_validate'),
            'category_id.exists' =>trans('admin/products.name_max_validate'),
            'price.required' =>trans('admin/products.price_required'),
            'price.numeric'  => trans('admin/products.price_numeric'),
            'price.min'  => trans('admin/products.price_min'),
            'price_discount.numeric'  => trans('admin/products.price_numeric'),
            'price_discount.min'  => trans('admin/products.price_min'),
            'description.required'=> trans('admin/products.description_required'),
            'description.max'=> trans('admin/products.description_max'),
            'photo.required' => trans('admin/products.photo_required'),
            'photo.mimes'     => trans('admin/products.photo_mimes')
            
        ];
    }
}
