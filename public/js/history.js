// Получение истории за все время из Cookies
function getAllTimeHistory() {
    var allTimeHistory = {};
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i].trim().split('=');
      var page = cookie[0];
      var views = parseInt(cookie[1]);
      
      if (!isNaN(views)) {
        allTimeHistory[page] = views;
      }
    }
    
    return allTimeHistory;
  }
  
  // Сохранение информации о просмотре страницы в истории за все время в Cookies
// Сохранение информации о просмотре страницы в истории за все время в Cookies
function savePageViewToAllTimeHistory(page) {
    var allTimeHistory = getAllTimeHistory();
  
    if (allTimeHistory[page]) {
      allTimeHistory[page]++;
    } else {
      allTimeHistory[page] = 1;
    }
  
    var expirationDate = new Date();
    expirationDate.setFullYear(expirationDate.getFullYear() + 10); // Устанавливаем срок действия на 10 лет
    var expires = expirationDate.toUTCString();
  
    setCookie(page, allTimeHistory[page], expires);
  }
  
  // Функция для получения значения cookie по имени
  function getCookie(name) {
    var cookies = document.cookie.split(';');
    
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i].trim().split('=');
      if (cookie[0] === name) {
        return cookie[1];
      }
    }
    
    return null;
  }
  
  // Функция для установки значения cookie
  function setCookie(name, value, expiration_days) {
    var expiration_date = new Date();
    expiration_date.setDate(expiration_date.getDate() + expiration_days);
    var expires = 'expires=' + expiration_date.toUTCString();
    document.cookie = name + '=' + value + '; ' + expires;
  }
  
  // Получение истории текущего сеанса из Local Storage
  function getSessionHistory() {
    var sessionHistory = JSON.parse(localStorage.getItem('sessionHistory')) || {};
    return sessionHistory;
  }
  
  // Генерация содержимого таблицы "История текущего сеанса"
  function generateSessionHistoryTable() {
    var sessionHistory = getSessionHistory();
    var tableBody = document.getElementById('sessionHistoryTable').getElementsByTagName('tbody')[0];
    
    for (var page in sessionHistory) {
      var row = document.createElement('tr');
      
      var pageCell = document.createElement('td');
      pageCell.textContent = page;
      row.appendChild(pageCell);
      
      var viewsCell = document.createElement('td');
      viewsCell.textContent = sessionHistory[page];
      row.appendChild(viewsCell);
      
      tableBody.appendChild(row);
    }
  }
  
  // Генерация содержимого таблицы "История за все время"
  function generateAllTimeHistoryTable() {
    var allTimeHistory = getAllTimeHistory();
    var tableBody = document.getElementById('allTimeHistoryTable').getElementsByTagName('tbody')[0];
    
    for (var page in allTimeHistory) {
      var row = document.createElement('tr');
      
      var pageCell = document.createElement('td');
      pageCell.textContent = page;
      row.appendChild(pageCell);
      
      var viewsCell = document.createElement('td');
      viewsCell.textContent = allTimeHistory[page];
      row.appendChild(viewsCell);
      
      tableBody.appendChild(row);
    }
  }
  
  // Вызов функций для генерации таблиц
  document.addEventListener('DOMContentLoaded', function() {
    generateSessionHistoryTable();
    generateAllTimeHistoryTable();
  });