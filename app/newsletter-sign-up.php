<section class="newsletter-sign-up <?php echo $newsletterClass; ?>">
  <div class="newsletter-image-bg hidden-mobile" style="background-image: url(<?php echo $newsletterQuoteContent['bg-img']?>);"></div>
  <?php if ($newsletterQuoteContent['img'] != ''):?>
    <div class="newsletter-image hidden-mobile show-on-scroll slide-up" data-animation-duration="1s" data-animation-offset="400" style="background-image: url(<?php echo $newsletterQuoteContent['img']?>);"></div>
  <?php endif; ?>
  <div class="content nowrap-desktop <?php if (strpos($newsletterClass, 'content-left') !== false ){ echo 'row-reverse'; } ?>">
    <div class="two-col full-width-mobile">
    </div>
    <div class="two-col full-width-mobile">
      <?php if ($newsletterQuoteContent['quote'] != ''):?>
        <section class="quote show-on-scroll fade-in-up" data-animation-duration="0.7s">
          <h2 class="italic">&ldquo;<?php echo $newsletterQuoteContent['quote']; ?>&rdquo;</h2>
          <p class="quote-attribution"><?php echo $newsletterQuoteContent['attribution']; ?></p>
        </section>
      <?php endif; ?>

      <?php if ($newsletterQuoteContent['img'] != ''):?>
        <div class="newsletter-image-mobile hidden-desktop stretch-full-mobile" style="background-image: url(<?php echo $newsletterQuoteContent['img']?>);"></div>
      <?php endif; ?>

      <form class="newsletter-form stretch-full-mobile show-on-scroll fade-in">
        <h3>Newsletter Sign Up</h3>
        <p>Sign up to receive news and updates from Jackie Robinson Museum</p>
        <input type="text" name="email">
        <input type="submit" value="Submit" class="btn">
      </form>
    </div>
  </div>
</section>
