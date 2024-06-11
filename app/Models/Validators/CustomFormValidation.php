<?php

namespace App\Models\Validators;

class CustomFormValidation extends FormValidation {

    public function isOptionSelected($data) {
        if (is_null($data)) {
            return "Вы должны выбрать один из вариантов ответа.";
        }
        return null;
    }

    public function isCorrectQ1($data) {
        $error = $this->isNotEmpty($data);

        if ($error) {
            return $error;
        }
        
        $words = explode(' ', $data);
        if (count($words) > 1) {
            return "Ответ должен содержать не более 1 слова.";
        }
        return null;
    }

    // public function validate($post_array) {
    //     foreach ($this->rules as $field_name => $validator_name) {
    //         $data = isset($post_array[$field_name]) ? $post_array[$field_name] : null;
    //         $error = null;

    //         switch ($validator_name) {
    //             case 'isNotEmpty':
    //                 $error = $this->isNotEmpty($data);
    //                 break;
    //             case 'isInteger':
    //                 $error = $this->isInteger($data);
    //                 break;
    //             case 'isLess':
    //                 $value = isset($post_array[$field_name . '_value']) ? $post_array[$field_name . '_value'] : null;
    //                 $error = $this->isLess($data, $value);
    //                 break;
    //             case 'isGreater':
    //                 $value = isset($post_array[$field_name . '_value']) ? $post_array[$field_name . '_value'] : null;
    //                 $error = $this->isGreater($data, $value);
    //                 break;
    //             case 'isEmail':
    //                 $error = $this->isEmail($data);
    //                 break;
    //             case 'isOptionSelected':
    //                 $error = $this->isOptionSelected($data);
    //                 break;
    //         }

    //         if ($error) {
    //             $this->errors[$field_name] = $error;
    //         }
    //     }
    // }

    // public function __construct() {
    //     $this->SetRule('IS', 'isNotEmpty');
    //     $this->SetRule('answer', 'isNotEmpty');
    //     $this->SetRule('answ3', 'isNotEmptySelect');
    // }
}