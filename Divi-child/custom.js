  (function($) {
     "use strict";
 $(".owl_carosol_area").owlCarousel({
         items: 1,
         // doots:true,
         // nav:true,
         loop: true,
         autoplay: true,
         autoplaySpeed: 4000,
         // responsiveClass:true,
         responsive: {
             0: {
                 items: 1,
             },
             480: {
                 items: 1,
             },
             768: {
                 items: 1,
             },

         }

     });
     $(".owl-loaded ").addClass("owl-carousel");
      })(jQuery);