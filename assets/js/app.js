$( document ).ready(function() {

AOS.init();
// CHANGE NAVBAR image on scroll 

$(function () { 
    $(document).scroll(function () {
      var $nav = $(".navbar-fixed-top");
        if ($(this).scrollTop() > $nav.height()) {
            $nav.addClass('scrolled', $(this).scrollTop() > $nav.height());
            // $('.navbar .navbar-brand img').attr('src','assets/img/navbar-logo-white.png');
        }
        else if ($(this).scrollTop() < 70 ) { 
            $nav.removeClass('scrolled', $(this).scrollTop() > $nav.height());
            // $('.navbar .navbar-brand img').attr('src','assets/img/navbar-logo.png');
        }
    })
});
 // Preloader 
 /*
  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    };
}); */

// Rotate Menu Arrow 
const navItemMore = document.querySelector('#moreTab');
const moreNavItemArrow = document.querySelector('#moreTab > a > i');

navItemMore.addEventListener("click", e => {
  moreNavItemArrow.classList.toggle("rotateArrow");
});

}); //End for document ready


