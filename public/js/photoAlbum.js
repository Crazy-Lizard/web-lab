$(document).ready(function() {
  fotos = new Array(16);
  pfotos = new Array(16);
  titles = new Array(16);
  jsonImages = {"fotos":[], "pfotos":[], "titles":[]};
  path = "images/";
  p = "-p";
  for (var i = 0; i < 16; i++) {
     jsonImages.fotos[i] = path + "lizard" + (i + 1) + ".jpg";
    jsonImages.pfotos[i] = path + "lizard" + (i + 1) + p + ".jpg";
    jsonImages.titles[i] = "lizard " + (i + 1);
  }

  var table = document.querySelector("table");
  
  for (var i = 0; i < jsonImages.pfotos.length; i++) {
    if (i % 4 === 0) {
      var row = document.createElement("tr");
    }
  
    var imgCell = document.createElement("td");
    var img = document.createElement("img");
    img.src = jsonImages.pfotos[i];
    img.alt = "Фото " + (i + 1);
    img.classList.add("img-cell");
  
    var tooltipSpan = document.createElement("span");
    tooltipSpan.classList.add("tooltiptext");
    tooltipSpan.textContent = jsonImages.titles[i];
    imgCell.appendChild(tooltipSpan);
  
    imgCell.appendChild(img);
    imgCell.addEventListener("mouseenter", showTitle);
    imgCell.addEventListener("mouseleave", hideTitle);
    imgCell.addEventListener("click", createPhotoViewer.bind(null, i));
  
    if (i % 4 === 0) {
      var titleRow = document.createElement("tr");
    }
    var titleCell = document.createElement("td");
    titleCell.textContent = jsonImages.titles[i];
    titleRow.appendChild(titleCell);
  
    row.appendChild(imgCell);
  
    table.appendChild(row);
    table.appendChild(titleRow);
  }
  
  function showTitle() {
    var tooltipSpan = this.querySelector(".tooltiptext");
    console.log("Наведен курсор на фотографию " + tooltipSpan.textContent);
    tooltipSpan.style.visibility = "visible";
    tooltipSpan.style.opacity = 1;
    tooltipSpan.style.transform = "translateX(-50%)";
  }
  
  function hideTitle() {
    var tooltipSpan = this.querySelector(".tooltiptext");
    tooltipSpan.style.visibility = "hidden";
  }
  var currentIndex = 0;

  function createPhotoViewer(index) {
    
    currentIndex = index;

    var popup = $("<div class='popup'></div>");
    var img = $("<img>")
      .attr("src", jsonImages.fotos[index])
      .attr("alt", "Большая фотография");

    var closeBtn = $("<div class='close-btn'>&times;</div>");

    var caption = $("<div class='caption'></div>")
      .text("Фото " + (index + 1) + " из " + jsonImages.fotos.length);
    var title = $("<div class='title'></div>")
      .text(jsonImages.titles[index]);

    var prevBtn = $("<div class='prev-btn'>&#10094;</div>");
    var nextBtn = $("<div class='next-btn'>&#10095;</div>");

    popup.append(closeBtn);
    popup.append(img);
    popup.append(title);
    popup.append(caption);
    popup.append(prevBtn);
    popup.append(nextBtn);

    $("body").append(popup);

    closeBtn.on("click", function() {
      popup.remove();
    });

    prevBtn.on("click", function() {
      currentIndex = (currentIndex - 1 + jsonImages.fotos.length) % fotos.length;
      img.attr("src", jsonImages.fotos[currentIndex]);
      caption.text("Фото " + (currentIndex + 1) + " из " + fotos.length);
      title.text(jsonImages.titles[currentIndex]);
    });

    nextBtn.on("click", function() {
      currentIndex = (currentIndex + 1) % jsonImages.fotos.length;
      img.attr("src", jsonImages.fotos[currentIndex]);
      caption.text("Фото " + (currentIndex + 1) + " из " + fotos.length);
      title.text(jsonImages.titles[currentIndex]);
    });
  }

});