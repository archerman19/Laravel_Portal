<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{
    public function addQuestion(QuestionRequest $request)
	{
		$name = $request->input('question-name');
		$email = $request->input('question-email');
		$phone = $request->input('question-phone');
		$text = $request->input('question-text');


		$questionModel = new Question();
		$questionModel = $questionModel->create([
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'text' => $text
		]);
		
		 if ($questionModel) {
			return redirect()->route('main');
		 }
	}
}
