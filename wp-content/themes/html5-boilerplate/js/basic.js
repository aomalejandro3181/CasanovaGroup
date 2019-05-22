$(document).ready(function(){
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

    var section_2 = $('#section-2').outerHeight();
    $('#section-2 .line').css('height',parseInt(20+section_2));

    var mision = $('#mision').outerHeight();
    $('#mision .line').css('height',parseInt(20+mision));

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