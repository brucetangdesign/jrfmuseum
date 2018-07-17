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

    //remove show on scroll class so animation play state will not be paused and element will be visible
    $el.removeClass("show-on-scroll");

    if($el.hasClass("mask-up-js")){
      if($(window).width() >= 768 ){
        $el.children().each(function(){
            TweenMax.from($(this),1.8,{y: $el.outerHeight(), delay: parseFloat($el.attr("data-js-animation-delay")), ease:Power3.easeInOut});
        });

        TweenMax.from($el,1.6,{height: 0, delay: parseFloat($el.attr("data-js-animation-delay")), ease:Power3.easeInOut,onComplete:clearProps});
      }
    }

    function clearProps(){
      TweenMax.set($el,{clearProps:"height"});
    }
  }

  //call the check on load
  checkForShowOnScrollElements();

  //call the check when you scroll or resize
  $(window).on("resize scroll", function(){
    if($(window).width() > 768){
      checkForShowOnScrollElements();
    }
  });
});
