<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Api\ApiFormRequest;

class ProductRequest extends ApiFormRequest
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
            
            'name' => 'required|string|min:2|max:200|unique:products',
            //'price' => 'required|numeric|between:XXXX',
            //]'weight' => 'required|numeric|min:1|max:999999',
            //'size' => 'required|string|x,y,z'
            
        ];
    }
}
