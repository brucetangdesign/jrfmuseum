$( document ).ready(function() {
  var $navBt = $(".nav-icon");
  var $nav = $("#nav");
  var $closeBt = $nav.find(".close-btn");

  $navBt.click(function(){
    TweenMax.to($nav, 0.6, {top: "0vh", ease: Power3.easeOut});
  });

  $closeBt.click(function(){
    TweenMax.to($nav, 0.4, {top: "-100vh", ease: Power3.easeIn});
  });
});
