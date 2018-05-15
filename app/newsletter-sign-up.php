<section class="newsletter-sign-up <?php echo $newsletterClass; ?>">
  <div class="newsletter-image-bg hidden-mobile" style="background-image: url(<?php echo $newsletterQuoteContent['bg-img']?>);"></div>
  <div class="newsletter-image hidden-mobile" style="background-image: url(<?php echo $newsletterQuoteContent['img']?>);"></div>
  <div class="content nowrap-desktop <?php if (strpos($newsletterClass, 'content-left') !== false ){ echo 'row-reverse'; } ?>">
    <div class="two-col full-width-mobile">
    </div>
    <div class="two-col full-width-mobile">
      <section class="quote">
        <h2 class="italic">&ldquo;<?php echo $newsletterQuoteContent['quote']; ?>&rdquo;</h2>
        <p class="quote-attribution"><?php echo $newsletterQuoteContent['attribution']; ?></p>
      </section>

      <div class="newsletter-image-mobile hidden-desktop stretch-full-mobile" style="background-image: url(<?php echo $newsletterQuoteContent['img']?>);"></div>

      <form class="newsletter-form stretch-full-mobile">
        <h3>Newsletter Sign Up</h3>
        <p>Sign up to receive news and updates from Jackie Robinson Museum</p>
        <input type="text" name="email">
        <input type="submit" value="Submit" class="btn">
      </form>
    </div>
  </div>
</section>
