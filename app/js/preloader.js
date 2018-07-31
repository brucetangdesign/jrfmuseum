var imagesPreloaded = false;

$( document ).ready(function() {
  var $img = $(".slideshow").find("img");
  var numImgsLoaded = 0;

  if($img.length){
      loadImages();
  }

  function loadImages(){
    var images = new Array();
    var srcArray = new Array();
    $img.each(function(index){
      images[index] = new Image();
      images[index].onload = imgLoaded;
      images[index].src = $(this).attr("src");
    });

    function imgLoaded(event){
      var img = event.target;
      numImgsLoaded += 1;

      img.onload = null;
      img = null;

      if(numImgsLoaded == $img.length){
        imagesPreloaded = true;
        animatePreloaderOut();
      }
    }
  }

  function animatePreloaderOut(){
    var $preloader = $(".preloader");
    var $bg = $preloader.find(".bg");
    var $spinner = $preloader.find(".spinner");

    $spinner.removeClass("fade-in");
    TweenMax.to($spinner,0.4,{opacity: 0});
    TweenMax.to($bg,1.3,{width: 0,ease: Power4.easeInOut,onComplete:killPreloader});

    function killPreloader(){
      $preloader.remove();
    }
  }
});
