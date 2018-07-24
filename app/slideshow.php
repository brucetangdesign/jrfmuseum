<?php
function slideshow($data){
?>
  <section id="<?php echo $data['slideshow-id']; ?>" class="slideshow-section <?php echo $data['slideshow-class']; ?>">
    <div class="slides-container <?php if($data['content-direction']=="left"){ echo 'row-reverse';} ?> row-normal-s">
      <div class="slideshow">
        <div class="vertical-line show-on-scroll expand-down <?php echo $data['content-direction']; ?>" data-animation-delay="0.2s"></div>
        <div class="slides show-on-scroll <?php if(count($data['slides']) > 1){ echo "has-hover-state"; } ?>" data-animation-offset="200">
          <?php
            $reversedSlides = array_reverse($data['slides']);

            foreach ($reversedSlides as $i => $row){

              echo '<div class="slide">';

              echo '<div class="color-filter"></div>';

              if (strpos($row['url'], 'youtube') !== false) {
                  echo '<a class="video-play-icon" data-video-source="'.$row['url'].'" data-video-width="'.$row['linkWidth'].'" data-video-height="'.$row['linkHeight'].'"></a>';
              }
              echo '<img src="'.$row['src'].'" />';

              echo '</div>';
            }
          ?>
        </div>
        <div class="slides-footer show-on-scroll fade-in <?php echo $data['content-direction']; ?>" data-animation-offset="200">
          <div class="slides-attributions">
            <?php
              $reversedSlides = array_reverse($data['slides']);
              foreach ($reversedSlides as $i => $row){
                echo '<div class="attribution" data-img-src="'.$row['src'].'"><p>Photo Credit:<span class="visible-xs"> </span><br class="hidden-xs">'.$row['attribution'].'</p></div>';
              }
            ?>
          </div>
          <?php if(count($data['slides']) > 1): ?>
            <div class="slideshow-control">
              <div class="slideshow-arrow prev"></div>
              <ul class="control-button-container horizontal-menu">
                <?php
                  foreach ($data['slides'] as $i => $row){
                    $checked='';
                    if($i == 0){
                      $checked = 'checked';
                    }
                    echo '<li>
                            <label class="slide-button-container">
                              <input type="radio" name="slide-button-'.$data['slideshow-id'].'" value="'.$row['src'].'"'.$checked.'></input>
                              <span class="radio"></span>
                            </label>
                          </li>';
                  }
                ?>
              </ul>
              <div class="slideshow-arrow next"></div>
            </div>
        <?php endif; ?>
        </div>
      </div>
      <?php if($data['slideshow-class'] != 'slideshow-full'): ?>
        <div class="slideshow-content show-on-scroll fade-in-up <?php echo $data['content-direction']; ?>">
          <h3><?php echo $data['title']; ?></h3>
          <p><?php echo $data['copy']; ?></p>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php
}
?>
