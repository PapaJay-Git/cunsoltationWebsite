var controller = new ScrollMagic.Controller();
var elements = [
    { elementID: '.section-2-header', animation: 'animate__zoomIn',
        childAnimation: [
            { elementID: '.section-2-description', animation: 'animate__zoomIn' },
            { elementID: '.section-2-data-1', animation: 'animate__zoomIn' },
            { elementID: '.section-2-data-2', animation: 'animate__zoomIn' },
            { elementID: '.section-2-data-3', animation: 'animate__zoomIn' },
            { elementID: '.section-2-bg', animation: 'animate__fadeInLeft' }
        ]
    },
    { elementID: '.section-3-data-image', animation: 'animate__fadeInLeft',
        childAnimation: [
            { elementID: '.section-3-data-description', animation: 'animate__fadeInRight' },
            { elementID: '.section-3-data-header', animation: 'animate__fadeInRight' },
            { elementID: '.section-3-bg', animation: 'animate__fadeInRight' },
        ]
    },


    { elementID: '.founder-section-1', animation: 'animate__fadeInLeft',
        childAnimation: [
            { elementID: '.founder-section-2', animation: 'animate__fadeInLeft' },
            { elementID: '.founder-section-3', animation: 'animate__fadeInLeft' },
            { elementID: '.founder-section-4', animation: 'animate__fadeInRight' },
            { elementID: '.founder-section-bg', animation: 'animate__fadeInLeft' },
        ]
    },

    { elementID: '.our-clients-header', animation: 'animate__zoomIn',
        childAnimation: [
            { elementID: '.our-clients-description', animation: 'animate__zoomIn' },
            { elementID: '.our-clients-data-1', animation: 'animate__fadeInLeft' },
            { elementID: '.our-clients-data-2', animation: 'animate__fadeInUp' },
            { elementID: '.our-clients-data-3', animation: 'animate__fadeInRight' },
            { elementID: '.our-clients-bg', animation: 'animate__fadeInLeft' },
        ]
    },


    { elementID: '.who-we-are-title', animation: 'animate__fadeInLeft',
        childAnimation: [
            { elementID: '.who-we-are-bg1', animation: 'animate__fadeInLeft' },
            { elementID: '.who-we-are-bg2', animation: 'animate__fadeInLeft' },
            { elementID: '.who-we-are-description', animation: 'animate__fadeInLeft' },
            { elementID: '.who-we-are-carousel', animation: 'animate__fadeInLeft' },
        ]
    },

    { elementID: '.our-experience-title', animation: 'animate__fadeInLeft',
        childAnimation: [
            { elementID: '.our-experience-bg-1', animation: 'animate__fadeInLeft' },
            { elementID: '.our-experience-bg-2', animation: 'animate__fadeInLeft' },
            { elementID: '.our-experience-bg-3', animation: 'animate__fadeInLeft' },
            { elementID: '.our-experience-image', animation: 'animate__fadeInLeft' },
            { elementID: '.our-experience-description', animation: 'animate__fadeInLeft' },
        ]
    },
    { elementID: '.what-we-do-title', animation: 'animate__fadeInLeft',
        childAnimation: [
            { elementID: '.what-we-do-image', animation: 'animate__fadeInLeft' },
            { elementID: '.what-we-do-description', animation: 'animate__fadeInRight' },
            { elementID: '.what-we-do-button', animation: 'animate__fadeInLeft' },
        ]
    },

];


function scrollMagicPerElement(elemenentID, animation, childAnimation = []){
    var scene = new ScrollMagic.Scene({
      triggerElement: elemenentID,
      triggerHook: 1,
      reverse: false
    })
    .on("enter", function () {
      document.querySelector(elemenentID)?.classList.add(animation);
      document.querySelector(elemenentID)?.classList.remove('invisible');
      childAnimation.forEach(function(child){
        document.querySelector(child.elementID)?.classList.add(child.animation);
        document.querySelector(child.elementID)?.classList.remove('invisible');
      });
    })
    .on("leave", function () {
      document.querySelector(elemenentID)?.classList.remove(animation);
      childAnimation.forEach(function(child){
        document.querySelector(child.elementID)?.classList.remove(child.animation);
      });
    })
    .addTo(controller);
}

elements.forEach(function(element) {
  scrollMagicPerElement(element.elementID, element.animation, element.childAnimation);
});
for (var i = 1; i <= 12; i++){
    var childElementOfServices =  [
        { elementID: `.services-${i}-data-2`, animation: 'animate__fadeInRight'},
        { elementID: `.services-${i}-data-3`, animation: 'animate__fadeInRight'},
        { elementID: `.services-${i}-data-4`, animation: 'animate__fadeInLeft'},
        { elementID: `.services-${i}-data-5`, animation: 'animate__fadeInRight'}
    ]
    scrollMagicPerElement(`.services-${i}-data-1`, 'animate__fadeInLeft', childElementOfServices);
}

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
