<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    { 
        $method = $this->method();
        if ($method == 'PUT'){
            return [
                'firstName'=> ['required'],
                'lastName'=> ['required'],
                'earning'=> ['required'],
                'email'=> ['required','email'],
                'password'=> ['required'],
            ];
        }else{
            return [
                'firstName'=> ['sometimes','required'],
                'lastName'=> ['sometimes','required'],
                'earning'=> ['sometimes','required'],
                'email'=> ['sometimes','required','email'],
                'password'=> ['sometimes','required'],
            ];
        }
        
    }
}
