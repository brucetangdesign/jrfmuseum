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
                        'wipe-driection' => 'right-to-left',
                        'rise-attribute' => 'animate-top',
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

$slideshowLargeContent = array('slideshow-id' => 'the-man-slideshow-large',
                              'slideshow-class' => 'slideshow-large',
                              'content-direction' => 'right',
                              'title' => 'Title',
                              'copy' => 'Content could be about his achievement in baseball - Etiam lacinia cursus ligula, vel efficitur eros scelerisque ac. Duis at eros ac risus pulvinar pulvinar. Proin ligula magna, sagittis vel arcu at, pretium convallis arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br>Nulla convallis eget orci nec facilisis. Integer tellus massa, volutpat eget consectetur id, dignissim nec felis. Cras eget neque in turpis vulputate egestas ac id mi. Pellentesque auctor odio bibendum lorem elementum, interdum porta odio suscipit.',
                              'slides' => array(
                                              array('src' => 'images/the-man-slideshow-large-00.jpg',
                                                    'attribution' => 'National Baseball Hall of Fame',
                                                    'url' => 'test.mp4'),
                                              array('src' => 'images/the-man-slideshow-large-01.jpg',
                                                    'attribution' => 'New York Times',
                                                    'url' => ''),
                                              array('src' => 'images/the-man-slideshow-large-02.jpg',
                                                    'attribution' => 'Life Magazine',
                                                    'url' => ''),
                                              array('src' => 'images/the-man-slideshow-large-03.jpg',
                                                    'attribution' => 'National Baseball Hall of Fame',
                                                    'url' => ''),
                                              array('src' => 'images/the-man-slideshow-large-04.jpg',
                                                    'attribution' => 'Major League Baseball',
                                                    'url' => ''),
                                              array('src' => 'images/the-man-slideshow-large-05.jpg',
                                                    'attribution' => 'Time Magazine',
                                                    'url' => ''),
                                              array('src' => 'images/the-man-slideshow-large-06.jpg',
                                                    'attribution' => 'Washington Post',
                                                    'url' => ''),
                                              array('src' => 'images/the-man-slideshow-large-07.jpg',
                                                    'attribution' => 'LA Times',
                                                    'url' => '')
                                          )
                              );
$slideshowContent = array('slideshow-id' => 'the-man-slideshow',
                          'slideshow-class' => '',
                          'content-direction' => 'left',
                          'title' => 'Title',
                          'copy' => 'Content could be about his achievement in baseball - Etiam lacinia cursus ligula, vel efficitur eros scelerisque ac. Duis at eros ac risus pulvinar pulvinar. Proin ligula magna, sagittis vel arcu at, pretium convallis arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br>Nulla convallis eget orci nec facilisis. Integer tellus massa, volutpat eget consectetur id, dignissim nec felis. Cras eget neque in turpis vulputate egestas ac id mi. Pellentesque auctor odio bibendum lorem elementum, interdum porta odio suscipit.',
                          'slides' => array(
                                          array('src' => 'images/the-man-slideshow-00.jpg',
                                                'attribution' => 'National Baseball Hall of Fame',
                                                'url' => ''),
                                          array('src' => 'images/the-man-slideshow-01.jpg',
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

<body class="page-the-man">
  <?php include 'header.php'; ?>
  <section id="the-man-content" class="main-content">
    <?php
      include 'feature.php';
      include 'about.php';
      slideshow($slideshowLargeContent);
      slideshow($slideshowContent);
    ?>
  </section>
  <?php include 'newsletter-sign-up.php'; ?>
  <?php include 'bottom-nav.php'; ?>
  <?php include 'footer.php'; ?>
</body>

</html>
