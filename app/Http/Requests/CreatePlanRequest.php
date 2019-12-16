<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanRequest extends FormRequest
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
            'title'=>'required|max:20',
            'description'=>'required|min:20',
            'price'=>'required|numeric',
            'pref_id'=>'required',
            'place'=>'required',
            'category_id'=>'required',
            'featured'=>'required|image'
        ];
    }
}
