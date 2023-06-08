<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryReq extends FormRequest
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
        if(request()->isMethod('post')){
            return [
                'name' => 'required',
                'description' => 'required',
                'meta_title' => 'required',
                'meta_description' => 'required'
            ];
        }elseif(request()->isMethod('put')){
            return [
                'name' => 'required',
                'description' => 'required',
                'meta_title' => 'required',
                'meta_description' => 'required'
            ];
        }
    }
}
