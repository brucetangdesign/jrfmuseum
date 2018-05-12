<section id="<?php echo $slideshowLargeContent['slideshow-id']; ?>" class="slideshow-section">
  <div class="slideshow slideshow-large">
    <div class="slides">
      <?php
        $reversedSlides = array_reverse($slideshowLargeContent['slides']);
        foreach ($reversedSlides as $i => $row){
          echo '<div class="slide"><img src="'.$row['src'].'" /></div>';
        }
      ?>
    </div>
  </div>
  <div class="slideshow-content">
    <h3><?php echo $slideshowLargeContent['title']; ?></h3>
    <p><?php echo $slideshowLargeContent['copy']; ?></p>
  </div>
  <div class="slides-footer">
    <div class="slides-attributions">
      <?php
        $reversedSlides = array_reverse($slideshowLargeContent['slides']);
        foreach ($reversedSlides as $i => $row){
          echo '<div class="slide-attribution"><p>Photo Credit:<br>'.$row['attribution'].'</p></div>';
        }
      ?>
    </div>
    <div class="slideshow-control"></div>
  </div>
</section>
