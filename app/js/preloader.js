var imagesPreloaded = false;

$( document ).ready(function() {
  var $img = $(".slideshow").find("img");
  var numImgsLoaded = 0;
  var initAnimationDone = false;

  //method to check if images are preloaded
  $.fn.checkImgsLoaded = function(callback,param=undefined){
    var checkImgsLoadedInterval = setInterval(checkImgsPreloaded, 1);

    function checkImgsPreloaded(){
      if(imagesPreloaded){
        clearInterval(checkImgsLoadedInterval);
        if(param != null && param != undefined){
          callback(param);
        }
        else{
          callback();
        }
      }
    }
  };

  if($img.length){
    //activate animation
    initAnimation();
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
        animatePreloaderOut();
      }
    }
  }

  function initAnimation(){
    var $preloader = $(".preloader");
    var $j = $(".j");
    var $jInner = $(".rect-holder-inner");
    var yIncrement = $j.find(".rect-holder-outer").attr("height");
    var timeIncrement = 0.65;

    $("html,body").addClass("stop-scroll");

    $j.css("display","block");
    TweenMax.from($jInner,0.8,{y:yIncrement,ease: Power2.easeInOut, onComplete:startLoop});

    function startLoop(){
      initAnimationDone = true;
      var tl = new TimelineMax({repeat:-1});

      tl.to($jInner,timeIncrement,{
          y:-yIncrement,
          delay:0.2,
          ease: Power3.easeInOut})
        .to($jInner,timeIncrement,{
          y:-yIncrement*2,
          ease: Power3.easeInOut})
        .to($jInner,timeIncrement,{
          y:-yIncrement*3,
          ease: Power3.easeInOut});
    }
  }

  function animatePreloaderOut(){
    var $preloader = $(".preloader");
    var $bg = $preloader.find(".bg");
    var $j = $(".j");

    var checkInitAnimationDoneInterval = setInterval(checkInitAnimationDone, 1);

    function checkInitAnimationDone(){
      if(initAnimationDone){
        clearInterval(checkInitAnimationDoneInterval);
        $("html,body").removeClass("stop-scroll");

        TweenMax.set($j,{x:-28});
        TweenMax.to($j,0.4,{opacity: 0});
        TweenMax.to($bg,1,{width: 0,ease: Power4.easeInOut,onComplete:killPreloader});
        imagesPreloaded = true;
      }
    }

    function killPreloader(){
      $preloader.remove();
    }
  }
});
