var controller = new ScrollMagic.Controller();
var elements = [
  { elementID: '.section-2-header', animation: 'animate__zoomIn' },
  { elementID: '.section-2-data-1', animation: 'animate__zoomIn' },
  { elementID: '.section-2-data-2', animation: 'animate__zoomIn' },
  { elementID: '.section-2-data-3', animation: 'animate__zoomIn' },
];


function scrollMagicPerElement(elemenetID, animation){
    // Create a scene for the animated element
    var scene = new ScrollMagic.Scene({
      triggerElement: elemenetID, // Trigger the animation when this element comes into view
      triggerHook: 0.9, // Trigger animation when 90% of the element is in view
      reverse: false // Keep the animation active as long as the element is in view
    })
    .on("enter", function () {
      document.querySelector(elemenetID).classList.add(animation);
      document.querySelector(elemenetID).classList.remove('opacity-0');
    })
    .on("leave", function () {
      document.querySelector(elemenetID).classList.remove(animation);
    })
    .addTo(controller);
}

elements.forEach(function(element) {
  scrollMagicPerElement(element.elementID, element.animation);
});