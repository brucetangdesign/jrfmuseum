$( document ).ready(function() {
  var $grid = $(".grid");
  var $shuffleBt = $(".donor-shuffle-bt");
  var curState = "random";

  $grid.isotope({
    layoutMode: 'packery',
    itemSelector: '.grid-item',
    initLayout: false,
    sortBy : 'random',
    packery: {
      columnWidth: '.grid-sizer',
      gutter: 20,
    }
  });

  $grid.isotope( 'on', 'arrangeComplete', function() {
    $grid.removeClass('paused-animation');
  });

  $grid.on( 'layoutComplete', function( event, laidOutItems ) {

  } );

  $grid.isotope();

  // reveal all items after init
  var $items = $grid.find('.grid-item');
  $grid.addClass('is-showing-items')
    .isotope( 'revealItemElements', $items );

  //shuffle bt
  $shuffleBt.click(function(){
    if(curState != "random"){
      $grid.isotope('shuffle');

      $(this).find("span").text("Shuffle By Gift");
      curState = "random";
    }
    else{
      $grid.isotope({sortBy: 'original-order'});
      $(this).find("span").text("Shuffle Randomly");
      curState = "byGift";
    }
  });
});
