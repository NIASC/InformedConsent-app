$(document).ready(function () {
  var sectionMenu = $('#section-navbar');
  var sectionMenuOffsetY = sectionMenu.offset() != null ? sectionMenu.offset().top : 0;

  function scroll() {
    if ($(window).scrollTop() >= sectionMenuOffsetY) {
        sectionMenu.addClass('navbar-fixed-top');
    } else {
        sectionMenu.removeClass('navbar-fixed-top');
    }
  }

  $("#section-navbar a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();

      var nabarHeight = sectionMenu.hasClass("navbar-fixed-top") ? sectionMenu.height() : 2 * sectionMenu.height();

      var hash = this.hash;
      var targetOffset = $(hash).offset().top - nabarHeight;

      $('html, body').animate({
        scrollTop: targetOffset
      }, 900, function(){
        window.location.hash = hash;
        });
      }
  });

  document.onscroll = scroll;
});
