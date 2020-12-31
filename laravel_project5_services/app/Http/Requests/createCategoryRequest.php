<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createCategoryRequest extends FormRequest
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
            'cat_name'    =>"required | max:20",
            'cat_desc' =>"required",
            'cat_image'   =>' mimes:jpeg,jpg,png,gifmax:10000', // becouse of default image in controller the required validation will not be need
        ];
    }
}
