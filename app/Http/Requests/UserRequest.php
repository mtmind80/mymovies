<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name'  => 'string|min:3|max:55',
            'email' => 'email|min:5|max:155',
            'password' => 'alpha_num|min:8|max:25',
        ];

        if ($this->isMethod('post')) {                         // adding new user
            foreach ($rules as & $rule) {
                $rule .= '|required';
            }
            unset($rule);
        } else if ($this->isMethod('patch')) {                 // updating user  allow change email only when id is found
            if ($this->request->has('email')) {
                $rules['email'] .= ',email'. $this->get('id');;
            }
        }

        return $rules;
    }
}
