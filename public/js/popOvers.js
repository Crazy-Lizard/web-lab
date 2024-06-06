$(document).ready(function() {
    // Показать блок Popover при наведении на поле ввода
    $('.tooltip-element').mouseover(function() {
      var tooltipText = $(this).attr('title');
      var tooltipElement = $('<div class="tooltip">' + tooltipText + '</div>');
      $(this).after(tooltipElement);
    });
    
    var timeout;
    $('.tooltip-element').mouseout(function() {
      timeout = setTimeout(function() {
        $('.tooltip').remove();
      }, 500); 
    }).mouseover(function() {
      clearTimeout(timeout);
    });
  });