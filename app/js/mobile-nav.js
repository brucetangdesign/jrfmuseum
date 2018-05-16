$( document ).ready(function() {
  var $navBt = $(".mobile-nav-icon");
  var $nav = $("#mobile-nav");
  var $closeBt = $nav.find(".close-btn");

  $navBt.click(function(){
    TweenMax.to($nav, 0.6, {top: "0vh"});
  });

  $closeBt.click(function(){
    TweenMax.to($nav, 0.6, {top: "-100vh"});
  });
});
