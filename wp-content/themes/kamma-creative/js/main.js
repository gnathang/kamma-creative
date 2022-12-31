var i = 0;
var txt = 'for indie businesses.';
var speed = 60;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typing-effect").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

window.addEventListener("load", typeWriter)
jQuery(document).ready(function( $ ) {
  
  $(function() {
    $(window).scroll(function () {
      // 
       if ($(this).scrollTop() > 1600) {
          $('.kamma-logo, .hamburger-menu').addClass('color-change');
       } 
       if ($(this).scrollTop() > 2400) {
        $('.kamma-logo, .hamburger-menu').removeClass('color-change');
       } 
      // remove class when scrolled back up past change area
       if ($(this).scrollTop() < 1600) {
        $('.kamma-logo, .hamburger-menu').removeClass('color-change');
       } 

    });
    });
});

jQuery(document).ready(function( $ ) {
  $(".scroll").click(function(event){
    event.preventDefault();
    var section = $(this).attr("href");
    $('html, body').animate({
        scrollTop: $(section).offset().top - -2
    });
  });
});

showMenu = () => {
  mobileMenu = document.getElementById('site-menu-small');
  console.log('fucker');
  mobileMenu.classList.toggle("open");
  // hamburger.classList.toggle("greenify");
  // logo.classList.toggle("greenify");
  // document.body.classList.toggle("disable-scroll");
}