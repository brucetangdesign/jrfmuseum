$( document ).ready(function() {
  var $bgWipe = $(".feature-bg-wipe");
  TweenMax.to($bgWipe,1.3,{width: 0, ease: Power2.easeInOut});
});
