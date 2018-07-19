$( document ).ready(function() {
  var $videoLink = $("[data-video-source]");

  //find video links
  $videoLink.each(function(){
    $(this).click(function(){
      openModal(
        $(this).data("video-source"),
        $(this).data("video-width"),
        $(this).data("video-height")
      );
    });
  });

  //opens the modal
  function openModal(src, baseW, baseH){

    var $modal = "<div class='video-modal'>"
                  + "<div class='bg grow-height-down'></div>"
                  + "<div class='content'>"
                      + "<a class='close-btn'></a>"
                      + "<iframe class='video-iframe fade-in-up-extreme' src='"+ src +"' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen='true'></iframe>"
                  + "</div>"
                + "</div>";

    $modal = $($modal);

    //init close button
    var $closeBt = $modal.find(".close-btn");
    TweenMax.from($closeBt,0.5,{opacity: 0, y: -90, ease: Back.easeOut, delay: 0.2})

    //click for close button
    $closeBt.click(function(){
      closeModal();
    });

    //add modal to body
    $("body").append($modal);

    //set iframe dimensions
    setiframeDimensions($modal, baseW, baseH);

    //add window resize listener
    $(window).on("resize",setiframeDimensions);

    //close the modal
    function closeModal(){
      $closeBt.off("click");
      $("body").find(".video-modal").remove();
    }

    //resizes iframe proportionally
    function setiframeDimensions(){
      var $iframe = $modal.find(".video-iframe");
      var iframeWidth = $iframe.width();
      var aspectRatio = baseH/baseW;
      var newHeight = iframeWidth * aspectRatio;
      $iframe.css("height",newHeight + "px");
    }
  }
});
