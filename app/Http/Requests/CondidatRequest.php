<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CondidatRequest extends FormRequest
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
            'name' => 'required|min:3|max:200',
            'who_is' => 'required',
            'how_is' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'name.min' => 'Не короче 3 символов',
            'name.max' => 'Не длинее 200 символов',
            'date_rod.required' => 'Поле возраст является обязательным',
            'date_rod.integer' => 'Поле возраст должно содержать цифру',
            'who_is.required' => 'Поле Вид деятельности является обязательным',
            'how_is.required' => 'Поле Предвыборная программа является обязательным',
        ];
    }

}
