
$('.slick-father').slick({
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3500
});

  // TOGGLE MENU
var menu = document.querySelector('div.burger')

menu.addEventListener('click', function() {

  menu.classList.toggle('open')
})

// BUTTON REDIRECT TOP
jQuery(document).ready(function($) {

  var visible = false;
  //Check to see if the window is top if not then display button
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    if (!visible && scrollTop > 100) {
      $(".scrollToTop").fadeIn();
      visible = true;
    } else if (visible && scrollTop <= 100) {
      $(".scrollToTop").fadeOut();
      visible = false;
    }
  });

  //Click event to scroll to top
  $(".scrollToTop").click(function() {
    $("html, body").animate({
      scrollTop: 0
    },100);
    return false;
  });

  });


