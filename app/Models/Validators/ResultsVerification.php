<?php

namespace App\Models\Validators;

// require 'App/Models/Validators/CustomFormValidation.php';

class ResultsVerification extends CustomFormValidation {
    private $answers = [];
    public function getAnswers() {
        return $this->answers;
    }

    public function setAnswer($question, $answer) {
        $this->answers[$question] = $answer;
    }

    public function checkAnswer($question, $userAnswer) {
        if ($this->answers[$question] == $userAnswer) {
            return true;
            // return "<div class='good'>Ответ верный.</div>";
        } else {
            // return "<div class='bad'>Ответ неверный. Правильный ответ:<br><br>" . $this->answers[$question] . "</div>";
            return false;
        }
    }

    public function checkAnswers($userAnswers) {
        $results = [];
        foreach ($userAnswers as $question => $userAnswer) {
            $results[$question] = $this->checkAnswer($question, $userAnswer);
        }
        return $results;
    }
//     private $result = 0;
//     private $answers = [];

//     public function __construct() {
//         parent::__construct();
//         $this->setAnswer('IS', 'Дисперсия');
//         // $this->setAnswer('IS', 'дисперсия');
//         $this->setAnswer('answer', 'Дисперсия');
//         $this->setAnswer('answ3', 'Дисперсия' );
//     }

//     public function checkAns($post_array) {
//         foreach ($this->answers as $key => $value) {
//             if ($post_array[$key] == $value) {
//                 $this->result++;
//             }
//         }
//         if (isset($post_array['checkbox1']) && !isset($post_array['checkbox2']) && isset($post_array['checkbox3'])) {
//             $this->result++;
//          } 
//     }

//     public function getResult() {
//         return $this->result;
//     }

//     public function setAnswer($field_name, $ans) {
//         $this->answers[$field_name] = $ans;
// 	}
}