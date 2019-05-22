$(document).ready(function(){

    $('#menu-main-menu li').click(function(){
      $('#navbarResponsive, .bs-example-navbar-collapse-1').collapse('toggle');
    });

    $('.hero-sliders').slick({
      dots: true,
      speed: 800,
      arrows: false
    });
  
    $('.slider-empresa').slick({
      dots: false,
      speed: 800,
      arrows: true
    });
  
    // On before slide change
    $('.slider-empresa').on('beforeChange', function(event, slick, currentSlide, nextSlide){
      
      $('.dots').removeClass('active')
      $('.dots figure').removeClass('active')
      $('.dot-'+nextSlide).addClass('active');
      $('.dot-'+nextSlide+' figure').addClass('active');
      $('.dot-'+currentSlide).removeClass('active');
    });

    var la_empresa = $('#la-empresa').outerHeight();
    $('#la-empresa .line').css('height',parseInt(20+la_empresa));

    var mision = $('#mision').outerHeight();
    $('#mision .line').css('height',parseInt(26+mision));

    var equipo = $('#equipo').outerHeight();
    $('#equipo .line').css('height',parseInt(126+equipo));

    // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#navbarResponsive a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
  
});