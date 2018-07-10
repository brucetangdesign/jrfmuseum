$( document ).ready(function() {
  var $navBt = $(".nav-icon");
  var $nav = $("#nav");
  var $closeBt = $nav.find(".close-btn");
  var $topLine = $navBt.find("svg #top");
  var $midLine = $navBt.find("svg #middle");
  var $botLine = $navBt.find("svg #bottom");
  var navOn = false;
  var tbLineAnimDuration =  0.2;
  var svgViewBox = ($navBt.find("svg")[0].viewBox.baseVal);
  var origW = svgViewBox.width;
  var origH = svgViewBox.height;
  var centerYCoord = origH/2;
  var bottomYCoord = origH - 1;
  var offset = origW/2 - origH/2;

  function transformNavIconToCloseIcon(){
    //move top and bottom lines to center
    TweenMax.to($topLine,tbLineAnimDuration,{attr:{y1: centerYCoord, y2: centerYCoord}, ease:Power2.easeInOut});
    TweenMax.to($botLine,tbLineAnimDuration,{attr:{y1: centerYCoord, y2: centerYCoord}, ease:Power2.easeInOut, onComplete: hideMidLine});

    //rotate top and bottom lines to make an X
    TweenMax.to($topLine,tbLineAnimDuration,{attr:{x1: offset, x2: bottomYCoord + offset, y1: "1", y2: bottomYCoord}, ease: Back.easeOut, delay: tbLineAnimDuration});
    TweenMax.to($botLine,tbLineAnimDuration,{attr:{x1: offset, x2: bottomYCoord + offset, y1: bottomYCoord, y2: "1"}, ease: Back.easeOut, delay: tbLineAnimDuration});
  }

  function transformCloseIconToNavIcon(){
    //stop any running tweens
    TweenMax.killChildTweensOf($navBt);

    //rotate top and bottom lines back to horizontal
    TweenMax.to($topLine,tbLineAnimDuration,{attr:{x1: "0", x2: origW, y1: centerYCoord, y2: centerYCoord}, ease: Power2.easeInOut});
    TweenMax.to($botLine,tbLineAnimDuration,{attr:{x1: "0", x2: origW, y1: centerYCoord, y2: centerYCoord}, ease: Power2.easeInOut, onComplete: showMidLine});

    //move top and bottom back to their original positions
    TweenMax.to($topLine,tbLineAnimDuration,{attr:{y1: "1", y2: "1"}, ease:Power4.easeOut, delay: tbLineAnimDuration});
    TweenMax.to($botLine,tbLineAnimDuration,{attr:{y1: bottomYCoord, y2: bottomYCoord}, ease:Power4.easeOut, delay: tbLineAnimDuration});
  }

  function hideMidLine(){
    TweenMax.set($midLine,{opacity: 0});
  }

  function showMidLine(){
    TweenMax.set($midLine,{clearProps:"all"});
  }

  function clearProps(){
    TweenMax.set($topLine, {clearProps: "all"});
    TweenMax.set($midLine, {clearProps: "all"});
    TweenMax.set($botLine, {clearProps: "all"});
  }

  //Bind the click event
  $navBt.click(function(){
    var $link = $nav.find("a");

    if(!navOn){
      TweenMax.to($nav, 0.6, {top: "0vh", ease: Power3.easeOut});
      $link.each(function(index){
        TweenMax.fromTo($(this),0.4,{y: 150, opacity: 0}, {y: 0, opacity: 1, delay: 0.3 + (0.06*index), ease: Power3.easeOut});
      });

      transformNavIconToCloseIcon();
      navOn = true;
    }
    else{
      TweenMax.to($nav, 0.4, {top: "-100vh", ease: Power3.easeIn});
      $link.each(function(index){
        TweenMax.set($link, {clearProps: "all"});
        TweenMax.to($(this),0.3,{y: -80, opacity: 0, delay: (0.04*index), ease: Power3.easeOut});
      });
      transformCloseIconToNavIcon();
      navOn = false;
    }
  });
});
