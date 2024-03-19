
var hambrgerButton = document.getElementById('hambrgerButton');
var ongoing = false;
const showFullScreenNav = async () => {
  if(ongoing){
    return false;
  }
  ongoing = true;
  hambrgerButton.classList.toggle('open');

  if(hambrgerButton.classList.contains('open')){
      await Promise.all([
          $("#fullScreenNav").removeClass("hidden").addClass("animate__slideInRight"),
          $("#mainNavigationItems").addClass("animate__zoomOut").removeClass("lg:flex"),
          (ongoing = false)
      ]);
  }else{
      await Promise.all([
          $("#fullScreenNav").removeClass("animate__slideInRight").addClass("animate__slideOutRight").one("animationend", function () {
            $(this).addClass("hidden").removeClass("animate__slideOutRight");
          }),
          
          $("#mainNavigationItems").removeClass("animate__zoomOut").addClass("lg:flex"),  
          
          $("#mainNavigationItems").addClass("animate__zoomIn").one("animationend", function () {
            $(this).removeClass("animate__zoomIn");
          }),
          (ongoing = false)
      ]);
  }
}
