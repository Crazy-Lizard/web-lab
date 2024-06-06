document.getElementById("TestForm").addEventListener("submit", function(event) {
    var fullNameInput = document.getElementById("full-name");
    var NFName = document.getElementById("fname");
  
    var fullName = fullNameInput.value.trim();
    var fullNameRegex = /^[а-яА-Я]+\s[а-яА-Я]+\s[а-яА-Я]/;
    var noFName = /^[а-яА-Я]+\s[а-яА-Я]/;

    if (NFName.checked) {
        if (!noFName.test(fullName)) {
            event.preventDefault();
            alert("Поле 'Фамилия Имя' должно содержать два слова, разделенные одним пробелом.");
            fullNameInput.focus();
            return; 
        }
    } else {
        if (!fullNameRegex.test(fullName)) {
            event.preventDefault();
            alert("Поле 'Фамилия Имя Отчество' должно содержать три слова, разделенные одним пробелом.");
            fullNameInput.focus();
            return; 
        }
    }

    var text = document.getElementById("Question1");
    var words = text.value.trim()
    if (words.includes(' ')) {
        event.preventDefault();
        alert("Поле с ответом на вопрос должно содержать одно слово.");
        text.focus();
        return;
    }
});