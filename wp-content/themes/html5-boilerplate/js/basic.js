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
  });