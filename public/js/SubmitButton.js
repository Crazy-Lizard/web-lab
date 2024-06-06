var submitButton = document.querySelector('button[type="submit"]');

submitButton.addEventListener("click", function(event) {

    var form = document.querySelector("form");

    var formFields = form.querySelectorAll("input, textarea, select");

    var hasEmptyFields = false;

    formFields.forEach(function(field) {
        if (field.type === "radio") {
            var radioGroup = form.querySelectorAll('input[name="' + field.name + '"]:checked');
            if (radioGroup.length === 0) {
                field.focus();
                hasEmptyFields = true;
            }
        }
        if (field.value.trim() === "") {
            hasEmptyFields = true;
            field.focus();
        }
    });

    if (hasEmptyFields) {
        event.preventDefault();
        alert("Пожалуйста, заполните все поля формы.");
    }
});