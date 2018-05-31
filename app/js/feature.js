$( document ).ready(function() {
  var $bgWipe = $(".feature-bg-wipe");
  var $featureImg = $(".feature-image");
  var $featureSection = $("section.feature");
  var riseStartY = $featureSection.height();
  var $featureHeader = $(".feature-copy h1");
  var $featureBody = $(".feature-copy p");
  var $featureVerticalLine = $featureSection.find(".content .vertical-line");

  //wipe the bg in
  if($(window).width() > 768){
    if($bgWipe.hasClass("right-to-left")){
      TweenMax.to($bgWipe,1.3,{x: $(window).width(), ease: Power2.easeInOut, onComplete: removeElement, onCompleteParams: [$bgWipe]});
    }
    else{
      TweenMax.to($bgWipe,1.3,{width: 0, ease: Power2.easeInOut, onComplete: removeElement, onCompleteParams: [$bgWipe]});
    }

    //raise the main img
    if($bgWipe.hasClass("animate-bottom")){
      riseStartY = $featureImg.height();
    }
    TweenMax.from($featureImg,1.8,{y: riseStartY, opacity: 0, ease: Power2.easeInOut});

    //Animate the text in
    TweenMax.set($featureHeader,{className: '-=paused-animation', delay: 1});
    TweenMax.set($featureBody,{className: '-=paused-animation', delay: 1.2});

    //Animate the vertical line
    TweenMax.from($featureVerticalLine,1.6,{height: 0, ease: Power2.easeInOut, delay: 0.6});
  }

  else{
    removeElement($bgWipe);
  }

  //remove an element from the DOM
  function removeElement($el){
    $el.remove();
  }
});
