<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question-name' => 'required|min:2|max:50',
			'question-email' => 'required|email',
			'question-phone' => 'required|digits:11',
			'question-text' => 'required|min:5|max:250'
        ];
    }

	 public function messages()
	 {
	 	return [
	 		'question-name.required' => 'Поле Имя обязательно для заполнения',
	 		'question-email.required' => 'Поле Email обязательно для заполнения',
	 		'question-phone.required' => 'Поле Телефон обязательно для заполнения',
	 		'question-text.required' => 'Поле Сообщение обязательно для заполнения',
	 		'question-name.min' => 'Поле Имя минимум 2 символа',
	 		'question-name.max' => 'Поле Имя минимум 50 символов',
	 		'question-email.email' => 'Неверный email',
	 		'question-phone.digits' => 'Номер телефона 11 цифр',
	 		'question-text.min' => 'Поле Сообщение минимум 2 символа',
	 		'question-text.max' => 'Поле Сообщение максимум 250 символов'
	 	];
	 }
}
