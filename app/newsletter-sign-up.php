<section class="newsletter-sign-up <?php echo $newsletterClass; ?>">
  <div class="newsletter-image" style="background-image: url(<?php echo $newsletterQuoteContent['img']?>);"></div>
  <div class="content">
    <div class="two-col">
    </div>
    <div class="two-col">
      <section class="quote">
        <h2 class="italic">&ldquo;<?php echo $newsletterQuoteContent['quote']; ?>&rdquo;</h2>
        <p class="quote-attribution"><?php echo $newsletterQuoteContent['attribution']; ?></p>
      </section>

      <form class="newsletter-form">
        <h3>Newsletter Sign Up</h3>
        <p>Sign up to receive news and updates from Jackie Robinson Museum</p>
        <input type="text" name="email">
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</section>
