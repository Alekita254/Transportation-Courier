(function($) {

  "use strict";

    // init Chocolat light box
    var initChocolat = function() {
      Chocolat(document.querySelectorAll('.image-link'), {
        imageSize: 'contain',
        loop: true,
      })
    }

 

  $(document).ready(function () {

    var swiper = new Swiper(".client-Swiper", {

      pagination: {
        el: ".swiper-pagination",
      },
    
      breakpoints: {

          0:{
            slidesPerView: 1,
          },

          768: {
            slidesPerView: 2,
            spaceBetween: 25,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 25,
          },
        }
      }); 


      initChocolat();

   
  });


})(jQuery);
