<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name'  => 'string|min:1|max:150|unique:directors',
        ];

        if ($this->isMethod('post')) {                         // adding new director
            foreach ($rules as & $rule) {
                $rule .= '|required';
            }
            unset($rule);
        } else if ($this->isMethod('patch')) {                 // updating director
            if ($this->request->has('name')) {
                $rules['name'] .= ',name'. $this->get('id');;
            }
        }

        return $rules;
    }
}
