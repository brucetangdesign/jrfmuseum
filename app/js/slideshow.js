$( document ).ready(function() {
  var $slideshow = $(".slideshow");

  if($slideshow.length){
    $slideshow.each(function(){
      if ($(".slideshow-control").length){
        activateSlideshow($(this));
      }
    });
  }

  function activateSlideshow($slideshow){
    var $controls = $slideshow.find(".slideshow-control");
    var $button = $controls.find(".slide-button-container input");
    var $prevArrow = $controls.find(".slideshow-arrow.prev");
    var $nextArrow = $controls.find(".slideshow-arrow.next");
    var $buttonContainer = $controls.find("li");
    var curSlide = 0;
    var numSlides = $button.length;
    var buttonWidth = $controls.find("li").outerWidth();
    var maxBtToShow = 5;
    var firstDisplayedButton = 0;
    var lastDisplayedButton = 4;

    $button.each(function(index){
      $(this).click(function(){
        if(numSlides > maxBtToShow){
          //Moving forwards
          if(curSlide < index){
            if(lastDisplayedButton < (numSlides-1) && index > firstDisplayedButton + 2){
              moveButtons($buttonContainer, "forwards", buttonWidth);
            }
          }

          //Moving backwards
          else if(curSlide > index){
            if(firstDisplayedButton > 0 && index < lastDisplayedButton-2){
              moveButtons($buttonContainer, "backwards", buttonWidth);
            }
          }
        }

        curSlide = index;
      });
    });

    $nextArrow.click(function(){
      var $curSelBtNum;
      $button.each(function(index){

        if($(this).is(':checked')){
          $curSelBtNum = index;
        }
      });

      if($curSelBtNum + 1 < numSlides){
        $button.each(function(index){
          if(index == ($curSelBtNum + 1)){
            $(this).trigger('click');
          }
        });
      }
    });

    $prevArrow.click(function(){
      var $curSelBtNum;
      $button.each(function(index){
        if($(this).is(':checked')){
          $curSelBtNum = index;
        }
      });

      if($curSelBtNum  > 0){
        $button.each(function(index){
          if(index == ($curSelBtNum - 1)){
            $(this).trigger('click');
          }
        });
      }
    });

    function moveButtons($object, direction, amount){
      if(direction == "forwards"){
        amount = -amount;
        firstDisplayedButton += 1;
        lastDisplayedButton += 1;
      }
      else{
        firstDisplayedButton -= 1;
        lastDisplayedButton -= 1;
      }

      $object.each(function(index){
        var transform = $(this)[0]._gsTransform;
        var curX = 0;

        if(transform != undefined){
          curX = transform.x;
        }
        TweenMax.to($(this), 0.5,{x: curX + amount, ease: Power2.easeOut});
      });
    }
  }
});
