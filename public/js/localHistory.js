// Получение текущей даты и времени
function getCurrentDateTime() {
    var now = new Date();
    return now.toLocaleString();
  }
  
  // Получение истории текущего сеанса из Local Storage
  function getSessionHistory() {
    var sessionHistory = JSON.parse(localStorage.getItem('sessionHistory')) || {};
    return sessionHistory;
  }
  
  // Сохранение информации о просмотре страницы в истории текущего сеанса
  function savePageViewToSessionHistory(page) {
    var sessionHistory = getSessionHistory();
  
    if (sessionHistory[page]) {
      sessionHistory[page]++;
    } else {
      sessionHistory[page] = 1;
    }
  
    localStorage.setItem('sessionHistory', JSON.stringify(sessionHistory));
  }
  
  // Вызов функции для сохранения информации о просмотре текущей страницы
  savePageViewToSessionHistory(document.title);
  savePageViewToAllTimeHistory(document.title);