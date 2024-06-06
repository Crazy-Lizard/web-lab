// Найти элемент, в котором будет отображаться текущая дата и время
var dateTimeElement = document.getElementById('datetime');

// Функция для обновления даты и времени
function updateDateTime() {
  // Получить текущую дату и время
  var currentDate = new Date();

  // Форматирование даты и времени
  var options = {
    hour: 'numeric',
    minute: 'numeric',
    second: 'numeric',
    day: 'numeric',
    month: 'short',
    year: '2-digit'
  };
  var formattedDateTime = currentDate.toLocaleDateString('ru-RU', options);

  // Обновить содержимое элемента с датой и временем
  dateTimeElement.innerHTML = formattedDateTime;
}

// Обновление даты и времени каждую секунду
setInterval(updateDateTime, 1000);