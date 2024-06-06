<?php

namespace App\Models\Validators;

class FormValidation {
    private $rules = [];
    private $errors = [];

    public function getErrors() {
        return $this->errors;
    }

    public function isNotEmpty($data) {
        if (empty($data)) {
            return "Поле не может быть пустым.";
        }
        return null;
    }

    public function isInteger($data) {
        if (!is_numeric($data) || intval($data) != $data) {
            return "Значение должно быть целым числом.";
        }
        return null;
    }
    
    public function isEmail($data) {
        $error = $this->isNotEmpty($data);

        if ($error) {
            return $error;
        }

        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return "Значение должно быть корректным email адресом.";
        }
        return null;
    }

    public function isFullName($data) {
        $error = $this->isNotEmpty($data);

        if ($error) {
            return $error;
        }

        $words = explode(' ', $data);
        if (count($words) != 3) {
            return "Значение должно состоять из трех слов.";
        }
        foreach ($words as $word) {
            if (!preg_match('/^[a-zA-Zа-яА-Я]+$/u', $word)) {
                return "Слова должны содержать только латинские и русские буквы.";
            }
        }
        return null;
    }

    public function isPhoneNumber($data) {
        $error = $this->isNotEmpty($data);

        if ($error) {
            return $error;
        }

        if (!preg_match('/^\+?[0-9]{10,13}$/', $data)) {
            return "Значение должно быть корректным номером телефона.";
        }
        return null;
    }

    public function isMessage($data) {
        $error = $this->isNotEmpty($data);

        if ($error) {
            return $error;
        }
        
        $words = explode(' ', $data);
        if (count($words) > 20) {
            return "Сообщение должно содержать не более 20 слов.";
        }
        return null;
    }

    public function setRule($field_name, $validator_name) {
        $this->rules[$field_name] = $validator_name;
    }

    public function validate($post_array) {
        foreach ($this->rules as $field_name => $validator_name) {
            $error = $this->$validator_name($post_array[$field_name]);
            if ($error !== null) {
                $this->errors[$field_name] = $error;
            }
        }
    }

    public function showErrors() {
        $html = "<ul class='errors-list'>";
        foreach ($this->errors as $field_name => $error) {
            $html .= "<li class='error-field'><p class='field-name'>$field_name</p>$error</li>";
        }
        $html .= "</ul>";
        return $html;
    }
    
/*
    public $errors = [];
    public $rules = [
        'full-name'=>['isNotEmpty'],
        'group'=>['isNotEmptySelect'],
        'phone'=>['isNotEmpty', 'isPhone'],
        'email'=>['isNotEmpty', 'isEmail'],
        'birthdate'=>['isNotEmpty'],
        'message'=>['isNotEmpty']
    ];

    public function SetRule($field_name, $validator_name) {
        if (!$this->rules[$field_name]) {
            $this->rules[$field_name] = [];
        }
        array_push($this->rules[$field_name], $validator_name);
	}

    public function getErrors() {
        return $this->errors;
    }

    public function validate($post_array) {
        foreach ($post_array as $key => $item) {
            if ($this->rules[$key]) {
                foreach ($this->rules[$key] as $rule) {
                    $this->$rule($item, $key);
                }
            }
        }
    }

    public function isNotEmptySelect($data, $key) {
		if ($data == 'Выберите ответ') {
			array_push($this->errors, "Поле $key не должно быть пустым");
		}
		return true;
    }

    public function isNotEmpty($data, $key) {
		if (empty($data)) {
			array_push($this->errors, "Поле $key не должно быть пустым");
		}
		return true;
    }
    
    public function isInteger($data, $key = null, $value = null) {
		if (ctype_digit($data)) {
			array_push($this->errors, "Поле $key содержит числа");
		}
		return false;
    }
    
    public function isLess($data, $key, $value = null){
		if ($this->isInteger($data) && ((int)$this->isInteger($data) >= $value)) {
			array_push($this->errors, "Поле $key слишком длинное");
		}
		return true;
	}

	public function isGreater($data, $key, $value = null){
		if ($this->isInteger($data) && ((int)$this->isInteger($data) <= $value)) {
			array_push($this->errors, "Поле $key слишком короткое");
		}
		return true;
    }
    
    public function isEmail($data, $key, $value = null) {
		if (preg_match('/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u', $data)) {
			return true;
		}
		array_push($this->errors, "В поле $key неверно введена почта");
	}

	public function isPhone($data, $key, $value = null) {
		if (preg_match('/^(\+7|\+3)([0-9]{8,10})$/', $data)) {
			return true;
		}
		array_push($this->errors, "В поле $key неверно введен номер телефона");
	}*/
}