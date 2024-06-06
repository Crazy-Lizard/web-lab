const fullNameInput = document.getElementById('full-name');
const phoneInput = document.getElementById('phone');
const emailInput = document.getElementById('email');
const messageInput = document.getElementById('message');

// Добавляем обработчики событий потери фокуса на каждое поле
fullNameInput.addEventListener('blur', validateFullName);
phoneInput.addEventListener('blur', validatePhone);
emailInput.addEventListener('blur', validateEmail);
birthdateInput.addEventListener('blur', validateBirthdate);
birthdateInput.addEventListener('input', validateBirthdate);
messageInput.addEventListener('blur', validateMessage);

var fullNameisValid = false;
var phoneisValid = false;
var emailisValid = false;
var birthdateisValid = false;
var messageisValid = false;
var button = document.getElementById("submitButton");
button.disabled = true;
button.style.backgroundColor = "grey";


// Функция для проверки корректности заполнения поля Фамилия Имя Отчество
function validateFullName() {
    var fullName = fullNameInput.value.trim();
    var fullNameRegex = /^[а-яА-Я]+\s[а-яА-Я]+\s[а-яА-Я]/;
    if (!fullNameRegex.test(fullName)) {
      fullNameisValid = false;
      showError(fullNameInput, "Введите Фамилию Имя Отчество через пробел");
      fullNameInput.style.borderColor = "red";
      changeButton()
      return; 
    }
    else {
      fullNameisValid = true;
      changeButton()
        fullNameInput.style.borderColor = "green";
        resetError(fullNameInput);
    }
}

function validatePhone() {
    var phone = phoneInput.value.trim();
    var phoneRegex = /^(\+7|\+3)[0-9]{9,11}$/;
    if (!phoneRegex.test(phone)) {
      phoneisValid = false;
      changeButton()
      showError(phoneInput, "Введите Номер телефона (+7...)");
      phoneInput.style.borderColor = "red";
      return; 
    }
    else {
      phoneisValid = true;
      changeButton()
        phoneInput.style.borderColor = "green";
        resetError(phoneInput);
    }
}

function validateEmail() {
    var email = emailInput.value.trim();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      emailisValid = false;
      changeButton()
      showError(emailInput, "Введите корректный адрес электронной почты");
      emailInput.style.borderColor = "red";
      return; 
    }
    else {
      emailisValid = true;
      changeButton()
        emailInput.style.borderColor = "green";
        resetError(emailInput);
    }
}

function validateBirthdate() {
    var birthdate = birthdateInput.value.trim();
    if (birthdate == '')
        return;
    if (!birthdateIsValid(birthdate)) {
      birthdateisValid = false;
      changeButton()
      showError(birthdateInput, "Введите корректную дату рождения");
      birthdateInput.style.borderColor = "red";
      return; 
    }
    else {
      birthdateisValid = true;
      changeButton()
        birthdateInput.style.borderColor = "green";
        resetError(birthdateInput);
    }
}

function birthdateIsValid(birthdate) {
    /*var birthdateRegex = /^\d{4}-\d{2}-\d{2}$/;
    if (!birthdateRegex.test(birthdate)) {
        alert("fdf");
      return false;
    }*/
  
    var parts = birthdate.split('-');
    var year = parseInt(parts[0], 10);
    var month = parseInt(parts[1], 10);
    var day = parseInt(parts[2], 10);
  
    if (isNaN(year) || isNaN(month) || isNaN(day)) {
      return false;
    }
  
    if (year < 1900 || year > 2023 || month < 1 || month > 12 || day < 1 || day > 31) {
      return false;
    }
  
    return true;
  }

function validateMessage() {
    var message = messageInput.value.trim();
    if (message.length === 0) {
      messageisValid = false;
      changeButton()
      showError(messageInput, "Введите сообщение");
      messageInput.style.borderColor = "red";
      return; 
    }
    else {
      messageisValid = true;
      changeButton()
        messageInput.style.borderColor = "green";
        resetError(messageInput);
    }
}

  function showError(input, errorMessage) {
    resetError(input);
    var container = input.parentNode;
    container.className = 'error';
    var msgElem = document.createElement('div');
    msgElem.className = "error-message";
    msgElem.innerHTML = errorMessage;
    container.appendChild(msgElem);
  }
  
  function resetError(input) {
    var container = input.parentNode;
    container.className = '';
  
    if (container.lastChild && container.lastChild.className == "error-message") {
      container.removeChild(container.lastChild);
    }
  }

  function changeButton() {
    if (fullNameisValid && phoneisValid && birthdateisValid && emailisValid && messageisValid) {
      console.log(fullNameisValid + messageisValid);
      button.disabled = false;
      button.style.background = "red";
      
    } else {
      button.style.backgroundColor = "grey";
      button.disabled = true;
    }
  }


  
const clearButton = document.getElementById('clear-button');

clearButton.addEventListener('click', function() {
  // Сбросить стили для каждого поля ввода
  fullNameInput.style.borderColor = "";
  phoneInput.style.borderColor = "";
  emailInput.style.borderColor = "";
  birthdateInput.style.borderColor = "";
  messageInput.style.borderColor = "";

  // Сбросить сообщения об ошибках
  resetError(fullNameInput);
  resetError(phoneInput);
  resetError(emailInput);
  resetError(birthdateInput);
  resetError(messageInput);

  // Сбросить состояние валидности
  fullNameisValid = false;
  phoneisValid = false;
  emailisValid = false;
  birthdateisValid = false;
  messageisValid = false;

  // Обновить состояние кнопки
  changeButton();
});