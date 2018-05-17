$( document ).ready(function() {
  var $slideshow = $(".slideshow");

  //Check if there is a slideshow on the page with more than one slide. If so activate it.
  if($slideshow.length){
    $slideshow.each(function(){
      if ($(".slideshow-control").length){
        activateSlideshow($(this));
      }
    });
  }

  //Initialize slideshow
  function activateSlideshow($slideshow){
    var $slidesContainer = $slideshow.parent();
    var $attributions = $slideshow.find(".slides-attributions");
    var $attribution = $attributions.find(".attribution");
    var $slides = $slideshow.find(".slides");
    var $controls = $slideshow.find(".slideshow-control");
    var $button = $controls.find(".slide-button-container input");
    var $prevArrow = $controls.find(".slideshow-arrow.prev");
    var $nextArrow = $controls.find(".slideshow-arrow.next");
    var $buttonContainer = $controls.find("li");
    var curSlideNum = 0;
    var numSlides = $button.length;
    var buttonWidth;
    var maxBtToShow = 5;
    var firstDisplayedButton = 0;
    var lastDisplayedButton = maxBtToShow-1;
    var slideDirection = "left";

    //deteremine which side of the screen the slides are on
    if($slidesContainer.css("flex-direction") == "row-reverse"){
      slideDirection = "right";
    }

    //Set an inital x transform on the button container and store it. This will be used for movement.
    $buttonContainer.each(function(){
      TweenMax.set($(this),{x:0});
      $(this).data("initX",$(this)[0]._gsTransform.x);
    });

    //Set up the Buttons (input elements)
    $button.each(function(index){
      var nextSlide;

      $(this).click(function(){
        //Get button container width
        buttonWidth = $controls.find("li").outerWidth();

        //Button moving animation - only if there are more than 5 slides
        if(numSlides > maxBtToShow){
          //Moving forwards
          if(curSlideNum < index){
            //Only move buttons if the last button is not last displayed one
            if(lastDisplayedButton < (numSlides-1) && index > firstDisplayedButton + 2){
              firstDisplayedButton += 1;
              lastDisplayedButton += 1;
              moveButtons($buttonContainer, buttonWidth);
            }
          }
          //Moving backwards
          else if(curSlideNum > index){
            //Only move buttons if the first button is not first displayed one
            if(firstDisplayedButton > 0 && index < lastDisplayedButton-2){
              firstDisplayedButton -= 1;
              lastDisplayedButton -= 1;
              moveButtons($buttonContainer, buttonWidth);
            }
          }
        }

        //Move the Slides
        animateSlides($(this).val());

        //update current slide number
        curSlideNum = index;
      });
    });

    //Next and Previous arrows
    $nextArrow.click(function(){
      //Find out which button is currently selected
      var curSelBtNum = getSelectedButtonNum();

      //Get button container width
      buttonWidth = $controls.find("li").outerWidth();

      //Trigger the click of the next button
      if(curSelBtNum + 1 < numSlides){
        $button.each(function(index){
          if(index == (curSelBtNum + 1)){
            $(this).trigger('click');
          }
        });
      }
      else{
        //Last button has been reached. Loop back to the beginning
        $button.each(function(index){
          if(index == (0)){
            firstDisplayedButton = 0;
            lastDisplayedButton = maxBtToShow-1;

            if(numSlides > maxBtToShow){
              moveButtons($buttonContainer, buttonWidth);
            }

            $(this).prop('checked',true);
            //Move the Slides
            animateSlides($(this).val());
            curSlideNum = 0;
          }
        });
      }
    });

    $prevArrow.click(function(){
      //Find out which button is currently selected
      var curSelBtNum = getSelectedButtonNum();

      //Get button container width
      buttonWidth = $controls.find("li").outerWidth();

      //Trigger the click of the next button
      if(curSelBtNum  > 0){
        $button.each(function(index){
          if(index == (curSelBtNum - 1)){
            $(this).trigger('click');
          }
        });
      }
      else{
        //First button has been reached. Loop to the ending.
        $button.each(function(index){
          if(index == (numSlides-1)){
            firstDisplayedButton = numSlides - (maxBtToShow);
            lastDisplayedButton = numSlides - 1 ;

            if(numSlides > maxBtToShow){
              moveButtons($buttonContainer, buttonWidth);
            }
            $(this).prop('checked',true);
            //Move the Slides
            animateSlides($(this).val());
            curSlideNum = numSlides-1;
          }
        });
      }
    });

    //Mobile swipe
    var mobileSwipe = new Hammer($slideshow[0]);

    mobileSwipe.on("swipeleft", function(ev) {
      slideDirection = "left";
      $nextArrow.trigger("click");
    });

    mobileSwipe.on("swiperight", function(ev) {
      slideDirection = "right";
      $prevArrow.trigger("click");
    });


    //Gets the index number of the currently selected button
    function getSelectedButtonNum(){
      var curSelBtNum;
      $button.each(function(index){
        if($(this).is(':checked')){
          curSelBtNum = index;
        }
      });

      return curSelBtNum;
    }

    //Moves the buttons left or right
    function moveButtons($object, amount){
      amount = -amount * firstDisplayedButton;

      $object.each(function(index){
        var initX = $(this).data("initX");
        TweenMax.killTweensOf($(this));
        TweenMax.to($(this), 0.5,{x: initX + amount, ease: Power2.easeOut});
      });
    }

    function animateSlides(newSlideSrc){
      var $newSlide;
      var $curSlide;
      var $newAttribution;
      var $curAttribution;
      var $slide = $slides.find(".slide");

      //Store the currently selected slide and the next slide
      $slide.each(function(index){
        $thisSlide = $(this);
        var imgSrc = $thisSlide.find("img").attr("src");

        //New slide
        if (imgSrc == newSlideSrc){
          $newSlide = $thisSlide;
        }

        //Get current slide and attribution
        $button.each(function(index){
          if(index == curSlideNum){
            if($(this).val() == imgSrc){
              $curSlide = $thisSlide;
            }
          }
        });

        //Get current slide and attribution
        $attribution.each(function(index){
            if($(this).attr("data-img-src") == imgSrc){
              $curAttribution = $(this);
            }

            if($(this).attr("data-img-src") == newSlideSrc){
              $newAttribution = $(this);
            }
        });
      });

      //Set the width and height of the slides div
      TweenMax.set($slides,{width: $newSlide.width() + parseInt($newSlide.css("margin-left")), height: $newSlide.height() + parseInt($newSlide.css("margin-left"))});

      //Set position of current slide
      $curSlide.addClass("slide-absolute");

      //Put new slide and attribution at 2nd position
      $newSlide.insertBefore($curSlide);
      $newAttribution.insertBefore($curAttribution);

      //Animate current slide off screen
      //calculate distance from edge of slide to left side of screen
      var curSlidePos = $curSlide.offset().left;
      //move the slide
      var finalPos = -(curSlidePos + $curSlide.width());
      if(slideDirection == "right"){
        finalPos = $(window).width()-curSlidePos;
      }
      TweenMax.to($curSlide,0.3,{x: finalPos, ease:Power2.easeOut, onComplete: completeAnimation, onCompleteParams: [$curSlide]});
      TweenMax.to($curAttribution,0,{opacity: 0, onComplete: completeAttributionAnimation, onCompleteParams: [$curAttribution]});

      //Animation complete, move old slide ot back, animate new slide, reset props
      function completeAnimation($slideToPutBack){
        //Move the old slide to the back of the pile
        $curSlide.removeClass("slide-absolute");
        $curSlide.prependTo($slides);
        TweenMax.set($slideToPutBack,{clearProps:"all"});

        //Set margin on New slide so it can animate smoothly
        TweenMax.set($newSlide,{position: "absolute"});
        TweenMax.set($newSlide,{clearProps: "all",delay: 0.3});
        //TweenMax.set($slides,{clearProps: "all", delay: 0.3});
      }

      function completeAttributionAnimation($attributionToPutBack){
        $curAttribution.prependTo($attributions);
        TweenMax.set($curAttribution,{clearProps:"all"});
        TweenMax.from($newAttribution, 0.3, {opacity: 0});
      }
    }

    $(window).resize(function(){
      TweenMax.set($slides,{clearProps: "all"});

      if($slidesContainer.css("flex-direction") == "row-reverse"){
        slideDirection = "right";
      }
    });
  }
});
