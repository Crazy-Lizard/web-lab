function createList(name, liName, ...items) {
    var p = document.createElement("p");
    var link = document.createElement("a");
    link.textContent = name;
    link.href = liName;
    p.appendChild(link);
  
    var ul = document.createElement("ul");
    i = 0;
    items.forEach(function (item, i) {
      var li = document.createElement("li");
      var a = document.createElement("a");
      a.textContent = item;
      a.href = liName + (i + 1);
      li.appendChild(a);
      ul.appendChild(li);
    });
  
    p.appendChild(ul);
    return p;
  }

var container = document.querySelector(".links");
var hobbies = createList("Хобби", "#hobby");
var musics = createList("Музыка", "#music");
var films = createList("Кино", "#films");
var che = createList("че", "#che");


container.appendChild(hobbies);
container.appendChild(musics);
container.appendChild(films);
container.appendChild(che);

// Добавляем обработчики событий для показа/скрытия меню при наведении курсора
var menu = document.querySelector(".links");

document.addEventListener("mousemove", function (event) {
  var mouseX = event.pageX; // Координата Y курсора
  var windowWidth = window.innerWidth; // Высота окна браузера

  // Если курсор близко к правой границе окна, показываем меню
  if (mouseX < windowWidth - 1500) {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
});