<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'title' => 'required|unique:products|string',
            'content' => 'required|string',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ];
    }
}
