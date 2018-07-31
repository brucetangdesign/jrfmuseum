<!doctype html>

<?php
//Page title
$pageTitle = "The Movement";

//Newsletter Content
$newsletterClass= "newsletter-the-movement content-left";
$newsletterQuoteContent = array('img' => 'images/newsletter-the-movement.png',
                                'bg-img' => 'images/newsletter-the-movement-bg.svg',
                                'quote' => 'A pilgrim that walked in the lonesome byways toward the high road of Freedom.',
                                'attribution' => 'Dr. Martin Luther King Jr.');

//PAGE CONTENT

//Feature
$featureContent = array('content-class' => 'justify-right',
                        'wipe-direction' => 'left-to-right',
                        'rise-attribute' => 'animate-top',
                        'title' => 'The<br>Movement',
                        'copy' => 'FPO - After integrating baseball, Robinson became a full-fledged leader in the civil rights movement.',
                        'img' => 'images/the-movement-feature.png',
                        'bg-img' => 'images/the-movement-feature-bg.svg',
                        'bg-cover-img' => 'images/the-movement-feature-bg-cover.svg',
                        'highlight-text' => 'Civil Rights'
                      );

$aboutContent = array('about-id' => 'the-movement-about',
                      'content-class' => 'row-reverse',
                      'copy' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id lacinia mauris. Etiam vel tellus nec lorem lobortis pellentesque. Etiam et blandit sapien. Sed consequat dolor eu orci tristique sodales. Donec nulla purus, porttitor finibus volutpat eu, varius aliquam augue. Nullam consectetur mi quis leo dictum efficitur. Quisque hendrerit non turpis in tincidunt. Sed et quam sed elit pharetra ullamcorper. Pellentesque dapibus sit amet erat sit amet fermentum. Praesent at massa sed libero scelerisque cursus a at erat. Praesent lacinia, nulla sit amet condimentum porta, tellus velit aliquet nunc, quis efficitur nibh sapien at metus. Nam vitae nunc et mauris tincidunt facilisis. Pellentesque sit amet consectetur ligula, in varius elit.'
                      );

$imgFullWidth = array('src' => 'images/the-movement-full-img.jpg',
                      'attribution' => 'The New York Times');

$slideshowFullContent = array('slideshow-id' => 'the-movement-slideshow-full',
                              'slideshow-class' => 'slideshow-full',
                              'content-direction' => '',
                              'title' => '',
                              'copy' => '',
                              'slides' => array(
                                                array('src' => 'images/the-movement-full-img.jpg',
                                                      'attribution' => 'The New York Times',
                                                      'url' => ''
                                                    )
                                          )
                              );

$slideshowLargeContent = array('slideshow-id' => 'the-movement-slideshow-large',
                              'slideshow-class' => 'slideshow-large',
                              'content-direction' => 'left',
                              'title' => 'Title',
                              'copy' => 'Content could be about his speech and march event for civil rights - Etiam lacinia cursus ligula, vel efficitur eros scelerisque ac. Duis at eros ac risus pulvinar pulvinar. Proin ligula magna, sagittis vel arcu at, pretium convallis arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br>Nulla convallis eget orci nec facilisis. Integer tellus massa, volutpat eget consectetur id, dignissim nec felis. Cras eget neque in turpis vulputate egestas ac id mi. Pellentesque auctor odio bibendum lorem elementum, interdum porta odio suscipit.',
                              'slides' => array(
                                              array('src' => 'images/the-movement-slideshow-large-00.jpg',
                                                    'attribution' => 'National Baseball Hall of Fame',
                                                    'url' => 'test.mp4'),
                                              array('src' => 'images/the-movement-slideshow-large-01.jpg',
                                                    'attribution' => 'National Baseball Hall of Fame',
                                                    'url' => '')
                                          )
                              );
$slideshowContent = array('slideshow-id' => 'the-movement-slideshow',
                          'slideshow-class' => '',
                          'content-direction' => 'right',
                          'title' => 'Title',
                          'copy' => 'Content could be Jackie and civil rights related - Etiam lacinia cursus ligula, vel efficitur eros scelerisque ac. Duis at eros ac risus pulvinar pulvinar. Proin ligula magna, sagittis vel arcu at, pretium convallis arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br>Nulla convallis eget orci nec facilisis. Integer tellus massa, volutpat eget consectetur id, dignissim nec felis. Cras eget neque in turpis vulputate egestas ac id mi. Pellentesque auctor odio bibendum lorem elementum, interdum porta odio suscipit.',
                          'slides' => array(
                                          array('src' => 'images/the-movement-slideshow-00.jpg',
                                                'attribution' => 'National Baseball Hall of Fame',
                                                'url' => ''),
                                          array('src' => 'images/the-movement-slideshow-01.jpg',
                                                'attribution' => 'National Baseball Hall of Fame',
                                                'url' => '')
                                      )
                          );

include 'slideshow.php';
 ?>

<html lang="en">
<head>
  <?php include 'head.php'; ?>
</head>

<body class="page-the-movement">
  <?php include 'preloader.php'; ?>
  <?php include 'header.php'; ?>
  <section id="the-movement-content" class="main-content">
    <?php
      include 'feature.php';
      include 'about.php';
      slideshow($slideshowFullContent);
      slideshow($slideshowLargeContent);
      slideshow($slideshowContent);
    ?>
  </section>
  <?php include 'newsletter-sign-up.php'; ?>
  <?php include 'bottom-nav.php'; ?>
  <?php include 'footer.php'; ?>
</body>
</html>
