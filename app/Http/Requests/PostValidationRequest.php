<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidationRequest extends FormRequest
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
        return [   //rules apply to input
            'title'=>'required|min:3',
            'body'=>'max:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'please Write descriptive title',
            'title.min'=>'title must be more than 3 letters',
//            'body.max'=>'content must not be greater than 10 letters '
        ];
    }
}
