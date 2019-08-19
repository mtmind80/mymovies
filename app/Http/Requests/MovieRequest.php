<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'title'  => 'string|min:1|max:50|unique:movies',
            'media_format' => 'string|in:VHS,DVD,Streaming',
            'length' => 'integer|min:0|max:500',
            'release_year'   => 'integer|min:1800|max:2100',
            'rating' => 'integer|min:1|max:5',
        ];

        if ($this->isMethod('post')) {                         // adding new movie
            foreach ($rules as & $rule) {
                $rule .= '|required';
            }
            unset($rule);
        } else if ($this->isMethod('patch')) {                 // updating movie
            if ($this->request->has('title')) {
                $rules['title'] .= ',title'. $this->get('id');;
            }
        }

        return $rules;
    }
}
