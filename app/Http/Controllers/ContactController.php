<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validators\FormValidation;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    } 
    
    public function validate_form(Request $request){
        //dd($request->all());

        $validator = new FormValidation();

        // Установка правил валидации
        $validator->setRule('fullname', 'isFullName');
        $validator->setRule('birthday', 'isNotEmpty');
        $validator->setRule('phone', 'isPhoneNumber');
        $validator->setRule('gender', 'isNotEmpty');
        $validator->setRule('age', 'isNotEmpty');
        $validator->setRule('email', 'isEmail');
        $validator->setRule('message', 'isMessage');

        // Выполнение валидации
        $validator->validate($request->all());

        if ($request->isMethod('post')) {
            $validator->validate($request->all());

            if (!empty($validator->getErrors())) {
                return view('contact', ['error_list' => $validator->showErrors(), 'errors_data' => $validator->getErrors()]);
                // return $validator->showErrors();
            } else {
                $fullName = $request->input('fullname');
                $birthdate = $request->input('birthday');
                $phone = $request->input('phone');
                $gender = $request->input('gender');
                $age = $request->input('age');
                $email = $request->input('email');
                $message = $request->input('message');

                $to = 'zheka.kovylin.7791@gmail.com';
                $subject = 'Новое сообщение от ' . $fullName;
                $body = "ФИО: $fullName\n";
                $body .= "Телефон: $phone\n";
                $body .= "Пол: $gender\n";
                $body .= "Возраст: $age\n";
                $body .= "E-mail: $email\n";
                $body .= "Дата рождения: $birthdate\n";
                $body .= "Сообщение: $message\n";

                // Отправка электронной почты
                mail($to, $subject, $body);

                // return 'Сообщение успешно отправлено.';
                // $email = $request->input('email');
                // $mailtoLink = "mailto:$email";
        
                // return view('contact', ['mailtoLink' => $mailtoLink]);
            }
        }

        return view('contact');
    }
}
