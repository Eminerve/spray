var height = 200;

$(window).scroll(function() {
  if ($(this).scrollTop() > height) {
    $('.navbar').addClass('fixed');
    $('.a').addClass('fixeda');
    $('.fleche').addClass('fixedfl');
    $('.ouvert').hide();
    $('.cache').show();
  } else {
    $('.navbar').removeClass('fixed');
    $('.a').removeClass('fixeda');
    $('.fleche').removeClass('fixedfl');
    $('.cache').hide();
    $('.ouvert').show();
  }
});

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 6 seconds
}

$(document).ready(function() {

  $('a[href^="#"]').click(function(evt){

    evt.preventDefault();
    var target = $(this).attr('href');
    $('html,body')
    .stop()
    .animate({scrollTop: $(target).offset().top}, 1500);
  });

});
