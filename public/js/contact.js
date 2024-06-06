document.getElementById("contactForm").addEventListener("submit", function(event) {
    var fullNameInput = document.getElementById("full-name");
    var phoneInput = document.getElementById("phone");
  
    var fullName = fullNameInput.value.trim();
    var fullNameRegex = /^[а-яА-Я]+\s[а-яА-Я]+\s[а-яА-Я]/;
    if (!fullNameRegex.test(fullName)) {
      event.preventDefault();
      alert("Поле 'Фамилия Имя Отчество' должно содержать три слова, разделенные одним пробелом.");
      fullNameInput.focus();
      return; 
    }

    var phone = phoneInput.value.trim();
    var phoneRegex = /^(\+7|\+3)[0-9]{9,11}$/;
    if (!phoneRegex.test(phone)) {
      event.preventDefault();
      alert("Поле 'Телефон' должно начинаться с '+7' или '+3', состоять только из цифр и содержать от 9 до 11 цифр.");
      phoneInput.focus();
      return;
    }
  });

const currentDate = new Date();
const currentMonth = currentDate.getMonth();
const currentYear = currentDate.getFullYear();
let selectedMonth = currentMonth;
let selectedYear = currentYear;
let selectedDay = currentDate.getDate();

// Функция для обновления выпадающих списков
function updateSelects() {
  const monthSelect = document.getElementById('monthSelect');
  const yearSelect = document.getElementById('yearSelect');

  // Очищаем существующие выборы
  monthSelect.innerHTML = '';
  yearSelect.innerHTML = '';

  // Заполняем выбор месяца
  const months = [
    'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
    'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
  ];
  for (let i = 0; i < months.length; i++) {
    const option = document.createElement('option');
    option.value = i;
    option.textContent = months[i];
    monthSelect.appendChild(option);
  }

  // Заполняем выбор года с 2000 по 2023
  const startYear = 1900;
  const endYear = 2023;
  for (let i = startYear; i <= endYear; i++) {
    const option = document.createElement('option');
    option.value = i;
    option.textContent = i;
    yearSelect.appendChild(option);
  }

  monthSelect.selectedIndex = selectedMonth;
  yearSelect.selectedIndex = selectedYear - startYear;
}

function getDayName(dayIndex) {
  const dayNames = ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'];
  return dayNames[dayIndex];
}

// Функция для обновления календаря
function updateCalendar() {
  const daysInMonth = new Date(selectedYear, selectedMonth + 1, 0).getDate();
  const firstDayIndex = new Date(selectedYear, selectedMonth, 1).getDay();
  const lastDayIndex = new Date(selectedYear, selectedMonth, daysInMonth).getDay();

  const prevMonthDays = new Date(selectedYear, selectedMonth, 0).getDate();
  const nextMonthDays = 7 - lastDayIndex - 1;

  let calendarHTML = '';

  for (let i = 0; i < 7; i++) {
    calendarHTML += `<div class="calendar-day-name">${getDayName(i)}</div>`;
  }

  // Добавляем дни предыдущего месяца
  for (let i = firstDayIndex - 1; i >= 0; i--) {
    calendarHTML += `<div class="calendar-day prev-month-day">${prevMonthDays - i}</div>`;
  }

  // Добавляем дни текущего месяца
  for (let i = 1; i <= daysInMonth; i++) {
    const dayClass = selectedDay === i ? 'calendar-day selected-day' : 'calendar-day';
    calendarHTML += `<div class="${dayClass}">${i}</div>`;
  }

  // Добавляем дни следующего месяца
  for (let i = 1; i <= nextMonthDays; i++) {
    calendarHTML += `<div class="calendar-day next-month-day">${i}</div>`;
  }

  const calendarDays = document.getElementById('calendarDays');
  calendarDays.innerHTML = calendarHTML;
}

// Обработчик события изменения месяца
const monthSelect = document.getElementById('monthSelect');
monthSelect.addEventListener('change', function (event) {
  selectedMonth = parseInt(event.target.value);
  updateCalendar();
});

// Обработчик события изменения года
const yearSelect = document.getElementById('yearSelect');
yearSelect.addEventListener('change', function (event) {
  selectedYear = parseInt(event.target.value);
  updateCalendar();
});

// Показываем календарь при фокусе на поле ввода даты
const birthdateInput = document.getElementById('birthdateInput');
const calendarPopup = document.getElementById('calendarPopup');
birthdateInput.addEventListener('focus', function () {
  calendarPopup.style.display = 'block';
});

// Скрываем календарь при клике вне его
document.addEventListener('click', function (event){
  const targetElement = event.target;
  if (!targetElement.closest('.calendar-popup') && targetElement !== birthdateInput) {
    calendarPopup.style.display = 'none';
  }
});

// При выборе даты обновляем поле ввода и закрываем календарь
const calendarDays = document.getElementById('calendarDays');
calendarDays.addEventListener('click', function (event) {
  const selectedDayElement = event.target.closest('.calendar-day');
  if (selectedDayElement) {
    const selectedDay = parseInt(selectedDayElement.textContent);
    birthdateInput.value = `${selectedYear}-${selectedMonth + 1}-${selectedDay}`;
    calendarPopup.style.display = 'none';
  }
});

// Инициализация календаря
updateSelects();
updateCalendar();