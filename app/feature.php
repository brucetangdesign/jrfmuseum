<section class="feature">
  <div class="feature-image-bg" style="background-image: url(<?php echo $featureContent['bg-img']?>);"></div>
  <div class="feature-image" style="background-image: url(<?php echo $featureContent['img']?>);"></div>
  <div class="feature-image-bg" style="background-image: url(<?php echo $featureContent['bg-cover-img']?>);"></div>
  <div class="content wide-content <?php echo $featureContent['content-class']?>">
    <div class="feature-copy">
      <h1><?php echo $featureContent['title']; ?></h1>
      <p class="large-body"><?php echo $featureContent['copy']; ?></p>
    </div>
    <div class="vertical-line"></div>
    <div class="feature-xl-text"><p class="xl-text"><?php echo $featureContent['highlight-text']; ?></p></div>
  </div>
</section>