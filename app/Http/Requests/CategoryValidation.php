<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryValidation extends FormRequest
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
        ];
    }

    public function messages(){
        return[
            'name.required' => trans('admin/categories.name_validate'),
            'name.min'      => trans('admin/categories.name_min_validate'),
            'name.max'      => trans('admin/categories.name_max_validate')
        ];
    }
}
