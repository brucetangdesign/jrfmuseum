$( document ).ready(function() {
  //checks if an element is in viewport
  function isInViewport($el, offset=200){
    var elementTop = $el.offset().top;
    var elementBottom = elementTop + $el.outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    if($el.data("animation-offset") != undefined){
      offset = parseInt($el.data("animation-offset"));
    }

    if($el.hasClass("slide-up")){
      offset = -($el.height() - offset);
    }

    return elementBottom > viewportTop && elementTop < viewportBottom-offset;
  }

  //Go through each show-on-scroll element and check if it's in viewport
  function checkForShowOnScrollElements(){
    $(".show-on-scroll").each(function(){
      if(isInViewport($(this))){
        animate($(this));
      }
    });
  }

  //animate the element (each element should have a css animation attached to it)
  function animate($el){
    //set any custom attributes
    if($el.data("animation-duration") != undefined){
      $el.css("animation-duration",$el.data("animation-duration"));
    }

    if($el.data("animation-delay") != undefined){
      $el.css("animation-delay",$el.data("animation-delay"));
    }

    //remove show on scroll class so animation play state will not be paused and element will be visible.
    $el.removeClass("show-on-scroll");

    if($el.hasClass("slides")){
      TweenMax.set($el,{opacity: 0});
      $el.css("pointerEvents","none");
      animateSlides($el);
    }
  }

  function animateSlides($slides){
    var checkSlidesHeightInterval = setInterval(checkSlidesHeight, 1);

    function checkSlidesHeight(){
      if($slides.css("height") != "0px"){
        clearInterval(checkSlidesHeightInterval);
        initAnimation();
      }
    }

    function initAnimation(){
      var $slide = $slides.find(".slide");
      var numSlides = $slide.length;
      var animDelay = 0;
      var animTime = 1.6;
      if($(window).width() >= 768 ){

        $slide.each(function(index){
          if (index < numSlides-2){
            TweenMax.set($(this),{opacity: 0});
          }
          else{
            if(index == numSlides-1 && numSlides > 1){
              animDelay = 0.3;
              $(this).children().each(function(index){
                TweenMax.from($(this),animTime + 0.4,{
                  y: parseInt($slides.css("height")),
                  delay: animDelay,
                  ease:Power2.easeOut});
              });

              TweenMax.from($(this),animTime +0.2,{
                height: 0,
                delay: animDelay,
                ease:Power2.easeOut,
                onComplete: clearProps,
                onCompleteParams: [$(this),index]
              });
            }
            else{
              $(this).children().each(function(index){
                TweenMax.from($(this),animTime + 0.2,{
                  y: parseInt($slides.css("height")),
                  delay: animDelay,
                  ease:Power2.easeOut});
              });

              TweenMax.from($(this),animTime,{
                height: 0,
                delay: animDelay,
                ease:Power2.easeOut,
                onComplete: clearProps,
                onCompleteParams: [$(this),index]
              });
            }
          }
        });
      }

      TweenMax.set($slides,{opacity: 1});

      function clearProps($slide,index){
        TweenMax.set($slide,{clearProps:"height"});

        if(index == numSlides-1){
          $slides.css("pointerEvents","all");
        }

        TweenMax.set($slides.children(),{clearProps: "opacity"});
      }
    }
  }

  //call the check on load or check if images are loaded if a slideshow is on the page
  if($(".slideshow").length){
    checkImgsLoaded();
  }
  else{
    checkForShowOnScrollElements();
  }

  function checkImgsLoaded(){
    var checkImgsLoadedInterval = setInterval(checkImgsPreloaded, 1);

    function checkImgsPreloaded(){
      if(imagesPreloaded){
        clearInterval(checkImgsLoadedInterval);
        checkForShowOnScrollElements();
      }
    }
  }

  //call the check when you scroll or resize
  $(window).on("resize scroll", function(){
    if($(window).width() > 768){
      checkForShowOnScrollElements();
    }
  });
});
