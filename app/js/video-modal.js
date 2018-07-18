$( document ).ready(function() {
  var $videoLink = $("[data-video-source]");

  $videoLink.each(function(){
    var src = $(this).data("video-source");
    $(this).click(function(){ openModal(src); });
  });

  function openModal(src){
    var $modal = "<div class='video-modal fade-in'>"
                  + "<div class='bg'></div>"
                  + "<div class='content'>"
                      + "<a class='close-btn'></a>"
                      + "<iframe class='video-iframe' src='"+ src +"' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen='true'></iframe>"
                  + "</div>"
                + "</div>";

    $modal = $($modal);

    $("body").append($modal);

    var $closeBt = $modal.find(".close-btn");

    $closeBt.click(function(){
      closeModal($(this));
    });
  }

  function closeModal($closeBt){
    $closeBt.off("click");
    $("body").find("video-modal").remove();
  }
});
