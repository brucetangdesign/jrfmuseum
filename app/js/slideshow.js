$( document ).ready(function() {
  var $slideshow = $(".slideshow");

  //Check if there is a slideshow on the page with more than one slide. If so activate it.
  if($slideshow.length){
    $slideshow.each(function(){
      if ($(".slideshow-control").length){
        //make sure images are loaded
        checkImgsLoaded($(this));
      }
    });
  }

  function checkImgsLoaded($slideshow){
    var checkImgsLoadedInterval = setInterval(checkImgsPreloaded, 1);

    function checkImgsPreloaded(){
      if(imagesPreloaded){
        clearInterval(checkImgsLoadedInterval);
        activateSlideshow($slideshow);
      }
    }
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

    setSlideshowDimensions();

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

    initDragEvent($slides);

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

        //unbind any drag events
        $(this).off("mousedown mouseup touchstart touchend mousemove touchmove");
      });

      //Set the width and height of slides div
      var margin = parseInt($newSlide.css("margin-left"));
      if(margin == 0){
        margin = parseInt($newSlide.css("margin-right"));
      }

      TweenMax.set($slides,{width: $newSlide.width() + margin, height: $newSlide.height() + margin});


      //Set position of current slide
      $curSlide.addClass("slide-absolute");

      //Put new slide and attribution at 2nd position
      $newSlide.insertBefore($curSlide);
      $newAttribution.insertBefore($curAttribution);

      //Animate current slide off screen
      //calculate distance from edge of slide to left side of screen
      var curSlidePos = $curSlide.offset().left - $curSlide.position().left;
      //move the slide
      var finalPos = -(curSlidePos + $curSlide.width());
      if(slideDirection == "right"){
        finalPos = $(window).width()-curSlidePos;
      }

      //temporarily set transition-duration to 0s so the CSS doesn't mix with our JS transition
      $curSlide.css("transition-duration","0s");
      $curSlide.css("-webkit-transition-duration","0s");
      //move the slide
      TweenMax.to($curSlide,0.4,{x: finalPos, ease:Power2.easeOut, onComplete: completeAnimation, onCompleteParams: [$curSlide]});
      TweenMax.to($curAttribution,0,{opacity: 0, onComplete: completeAttributionAnimation, onCompleteParams: [$curAttribution]});

      //Animation complete, move old slide to back, animate new slide, reset props
      function completeAnimation($slideToPutBack){
        //Move the old slide to the back of the pile
        $curSlide.removeClass("slide-absolute");
        $curSlide.prependTo($slides);
        TweenMax.set($slideToPutBack,{clearProps:"all"});

        //Set margin on New slide so it can animate smoothly
        TweenMax.set($newSlide,{clearProps: "all",delay: 0.3});

        //bind the drag event to the correct slide
        initDragEvent($curSlide.parent());

        //reset slide css transition time
        $curSlide.css("transition-duration","0.2s");
        $curSlide.css("-webkit-transition-duration","0.2s");
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

      setSlideshowDimensions();
    });

    //get height of first slide, set height of slideshow and set first slide to absolute pos
    function setSlideshowDimensions(){
      var $lastSlide =  $slides.find(".slide").last();
      var slideshowHeight = $lastSlide.find("img").height();
      var marginBottom = parseInt($lastSlide.css("marginBottom"));
      var marginTop = parseInt($lastSlide.css("marginTop"));

      if(slideshowHeight != 0 && slideshowHeight != undefined){
        if(marginBottom != 0){
          slideshowHeight += marginBottom;
        }
        else{
          slideshowHeight += marginTop;
        }

        $slides.css("height",slideshowHeight+"px");
      }
      else{
        $slides.css("height","0px");
      }
    }

    //drag action for slides
    function initDragEvent($slides){
      var $slide = $slides.find(".slide").last();
      var baseX = $slide.offset().left;
      var baseClickX;
      var amountMoved;

      $slide.on("mousedown touchstart", function(event){
        var clientX;

        if(event.type == "touchstart"){
          clientX = event.touches[0].clientX;
        }
        else{
          clientX = event.clientX;
        }
        baseClickX = clientX - baseX;


        $(this).on("mousemove touchmove",function(event){
          var shiftX;

          if(event.type == "touchmove"){
            shiftX = event.touches[0].clientX - baseX;
          }
          else{
            shiftX = event.clientX - baseX;

          }
          amountMoved = -(baseClickX - shiftX);

          TweenMax.set($(this),{x:amountMoved});

          checkAmountMoved(true,event);
        });

        $(this).on("mouseup touchend mouseleave",function(event){
          $(this).off("mousemove touchmove mouseleave mouseup touchend");
          checkAmountMoved(false,event);
        });
      });

      function checkAmountMoved(isDragging,event){
        var $curSlide;

        if(!$(event.target).hasClass("slide")){
          $curSlide = $(event.target).parents(".slide");
        }
        var limit = 200;
        if($(window).width() < 768){
          limit = 100;
        }

        if(isDragging){
          if(amountMoved > limit || amountMoved < -limit){
            $curSlide.off();
            if(amountMoved > limit){
              console.log("called prev");
              slideDirection = "right";
              $prevArrow.trigger("click");
            }
            else{
              console.log("called next");
              slideDirection = "left";
              $nextArrow.trigger("click");
            }
          }
        }
        else{
          TweenMax.to($slide,0.2,{x:0, ease: Power3.easeOut, onComplete: clearProps});
        }

        function clearProps(){
          TweenMax.set($slide,{clearProps: "transform"});
        }
      }
    }
  }
});
