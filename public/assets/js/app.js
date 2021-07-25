

// TOGGLE MENU
var menu = document.querySelector('div.burger')

menu.addEventListener('click', function() {

  menu.classList.toggle('open')
})

// SLICK IMAGES
$('.slick-father').slick({
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3500
});



// SLICK TEXTS

$('.slick-text-father').slick({
  dots: false,
  arrows: false,
  autoplay: true,
  slidesToScroll: 1,
  autoplaySpeed: 3500,
});

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

window.addEventListener('scroll', reveal)

function reveal() {
  var reveals = document.querySelectorAll('.reveal')

  for(var i = 0; i < reveals.length; i++) {
    
    var windowHeight = window.innerHeight;
    var revealTop = reveals[i].getBoundingClientRect().top;
    var revealPoint = 150

    if (revealTop < windowHeight - revealPoint) {
      reveals[i].classList.add('active')
    } else {
      reveals[i].classList.remove('active')
    }
  }
}




