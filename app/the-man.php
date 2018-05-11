<!doctype html>

<?php
//Page title
$pageTitle = "The Man";

//Newsletter Content
$newsletterClass= "newsletter-the-man content-right";
$newsletterQuoteContent = array('img' => 'images/newsletter-the-man.png',
                                'bg-img' => 'images/newsletter-the-man-bg.svg',
                                'quote' => 'A life is not important except in the impact it has on other lives.',
                                'attribution' => 'Jackie Robinson');

//PAGE CONTENT

//Feature
$featureContent = array('content-class' => 'justify-left',
                        'title' => 'The<br>Man',
                        'copy' => 'FPO - Pioneer & civil rights activist, Jackie Robinson broke the color barrier, becoming the first African American in professional baseball.',
                        'img' => 'images/the-man-feature.png',
                        'bg-img' => 'images/the-man-feature-bg.svg',
                        'bg-cover-img' => 'images/the-man-feature-bg-cover.svg',
                        'highlight-text' => 'Jackie Robinson'
                      );

$aboutContent = array('about-id' => 'the-man-about',
                      'content-class' => '',
                      'copy' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id lacinia mauris. Etiam vel tellus nec lorem lobortis pellentesque. Etiam et blandit sapien. Sed consequat dolor eu orci tristique sodales. Donec nulla purus, porttitor finibus volutpat eu, varius aliquam augue. Nullam consectetur mi quis leo dictum efficitur. Quisque hendrerit non turpis in tincidunt. Sed et quam sed elit pharetra ullamcorper. Pellentesque dapibus sit amet erat sit amet fermentum. Praesent at massa sed libero scelerisque cursus a at erat. Praesent lacinia, nulla sit amet condimentum porta, tellus velit aliquet nunc, quis efficitur nibh sapien at metus. Nam vitae nunc et mauris tincidunt facilisis. Pellentesque sit amet consectetur ligula, in varius elit.'
                      );
$slideshowLargeContent = array('slideshow-id' => 'the-man-slideshow-large'

                    );
 ?>

<html lang="en">
<head>
  <?php include 'head.php'; ?>
</head>

<body class="page-the-man">
  <?php include 'header.php'; ?>
  <section id="the-man-content" class="main-content">
    <?php include 'feature.php'; ?>
    <?php include 'about.php'; ?>
    <?php include 'slideshow-large.php'; ?>


  </section>
  <?php include 'newsletter-sign-up.php'; ?>
  <?php include 'bottom-nav.php'; ?>
  <?php include 'footer.php'; ?>
</body>
</html>
