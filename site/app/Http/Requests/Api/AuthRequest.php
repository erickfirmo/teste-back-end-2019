<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Api\ApiFormRequest;

class AuthRequest extends FormRequest
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6'
        ];
        
    }

    public function messages()
    {
        return [
            'email.required' => 'Email é obrigatório!',
            'password.required' => 'Senha é obrigatória!'
        ];
    }

    public function response(array $errors)
    {

        if($this->expectsJson())
        {
            return new JsonResponse($errors, 422);
        }

        //return redirect()->route('login');

    }
}
