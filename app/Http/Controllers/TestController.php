<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\validators\FormValidation;
use App\Models\Validators\CustomFormValidation;
use App\Models\Validators\ResultsVerification;

class TestController extends Controller
{
    //
    public function index()
    {
        return view('test');
    }

    public function validate_form(Request $request) {

        $valid_ver = new ResultsVerification();

        // Установка правил валидации
        $valid_ver->setRule('Question1', 'isCorrectQ1');
        $valid_ver->setRule('Question2', 'isNotEmpty');
        $valid_ver->setRule('Question3', 'isNotEmpty');
        $valid_ver->setRule('full-name', 'isFullName');
        $valid_ver->setRule('group', 'isNotEmpty');

        $valid_ver->validate($request->all());

        if ($request->isMethod('post')) {
            $valid_ver->validate($request->all());

            if (!empty($valid_ver->getErrors())) {
                return view('test', ['errors_data' => $valid_ver->getErrors()]);
            } else {
                $valid_ver->setAnswer('Question1', 'Дисперсия');
                $valid_ver->setAnswer('Question2', 'Дисперсия');
                $valid_ver->setAnswer('Question3', 'Дисперсия');

                $test_data = $request->all();
    
                // Проверка ответов пользователя
                $user_answers = [
                    'Question1' => $test_data['Question1'],
                    'Question2' => $test_data['Question2'],
                    'Question3' => $test_data['Question3'],
                ];
                $answers = $valid_ver->getAnswers();
                $results = $valid_ver->checkAnswers($user_answers);

                return view('test',['answers' => $answers, 'user_answers' => $user_answers, 'results'=> $results]);
            }
        }
    }
}