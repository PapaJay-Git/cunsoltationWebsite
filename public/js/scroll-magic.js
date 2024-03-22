var controller = new ScrollMagic.Controller();
var elements = [
  { elementID: '.section-2-header', animation: 'animate__zoomIn' },
  { elementID: '.section-2-description', animation: 'animate__zoomIn' },
  { elementID: '.section-2-data-1', animation: 'animate__zoomIn' },
  { elementID: '.section-2-data-2', animation: 'animate__zoomIn' },
  { elementID: '.section-2-data-3', animation: 'animate__zoomIn' },

  { elementID: '.section-3-data-image', animation: 'animate__fadeInLeft' },
  { elementID: '.section-3-data-description', animation: 'animate__fadeInRight' },
  { elementID: '.section-3-data-header', animation: 'animate__fadeInRight' },

  { elementID: '.section-4-header', animation: 'animate__zoomIn' },
  { elementID: '.section-4-description', animation: 'animate__zoomIn' },
  { elementID: '.section-4-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.section-4-data-2', animation: 'animate__fadeInUp' },
  { elementID: '.section-4-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-1-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-1-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-1-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-2-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-2-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-2-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-3-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-3-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-3-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-4-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-4-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-4-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-5-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-5-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-5-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-6-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-6-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-6-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-7-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-7-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-7-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-8-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-8-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-8-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-9-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-9-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-9-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-10-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-10-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-10-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.services-11-data-1', animation: 'animate__fadeInLeft' },
  { elementID: '.services-11-data-2', animation: 'animate__fadeInRight' },
  { elementID: '.services-11-data-3', animation: 'animate__fadeInRight' },

  { elementID: '.founder-section-1', animation: 'animate__fadeInLeft' },
  { elementID: '.founder-section-2', animation: 'animate__fadeInLeft' },
  { elementID: '.founder-section-3', animation: 'animate__fadeInLeft' },
  { elementID: '.founder-section-4', animation: 'animate__fadeInRight' },


];


function scrollMagicPerElement(elemenentID, animation){
    var scene = new ScrollMagic.Scene({
      triggerElement: elemenentID,
      triggerHook: 1,
      reverse: false
    })
    .on("enter", function () {
      document.querySelector(elemenentID)?.classList.add(animation);
      document.querySelector(elemenentID)?.classList.remove('opacity-0');
    })
    .on("leave", function () {
      document.querySelector(elemenentID)?.classList.remove(animation);
    })
    .addTo(controller);
}

elements.forEach(function(element) {
  scrollMagicPerElement(element.elementID, element.animation);
});
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        dots: true,
        items: 1,
        center: true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
    });
  });
