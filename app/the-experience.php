<!doctype html>

<?php
//Page title
$pageTitle = "The Experience";

//Newsletter Content
$newsletterClass= "newsletter-the-experience content-left";
$newsletterQuoteContent = array('img' => '',
                                'bg-img' => 'images/newsletter-the-experience-bg.svg',
                                'quote' => '',
                                'attribution' => '');

//PAGE CONTENT

//Feature
$featureContent = array('content-class' => 'justify-left',
                        'wipe-direction' => 'left-to-right',
                        'rise-attribute' => 'animate-bottom',
                        'title' => 'The<br>Experience',
                        'copy' => 'FPO - The Jackie Robinson Museum will celebrate the continuing legacy of one of the most important Americans of the 20th century.',
                        'img' => 'images/the-experience-feature.png',
                        'bg-img' => 'images/the-experience-feature-bg.svg',
                        'bg-cover-img' => 'images/the-experience-feature-bg-cover.svg',
                        'highlight-text' => 'Museum'
                      );

$aboutContent = array('about-id' => 'the-experience-about',
                      'content-class' => '',
                      'copy' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id lacinia mauris. Etiam vel tellus nec lorem lobortis pellentesque. Etiam et blandit sapien. Sed consequat dolor eu orci tristique sodales. Donec nulla purus, porttitor finibus volutpat eu, varius aliquam augue. Nullam consectetur mi quis leo dictum efficitur. Quisque hendrerit non turpis in tincidunt. Sed et quam sed elit pharetra ullamcorper. Pellentesque dapibus sit amet erat sit amet fermentum. Praesent at massa sed libero scelerisque cursus a at erat. Praesent lacinia, nulla sit amet condimentum porta, tellus velit aliquet nunc, quis efficitur nibh sapien at metus. Nam vitae nunc et mauris tincidunt facilisis. Pellentesque sit amet consectetur ligula, in varius elit.'
                      );

$imgFullWidth = array('src' => 'images/the-experience-full-img.jpg',
                      'attribution' => 'TBD');

$slideshowFullContent = array('slideshow-id' => 'the-experience-slideshow-full',
                                                'slideshow-class' => 'slideshow-full',
                                                'content-direction' => '',
                                                'title' => '',
                                                'copy' => '',
                                                'slides' => array(
                                                                  array('src' => 'images/the-experience-full-img.jpg',
                                                                        'attribution' => 'TBD',
                                                                        'url' => ''),
                                                                  array('src' => 'images/the-experience-full-img.jpg',
                                                                        'attribution' => 'TBD',
                                                                        'url' => '')
                                                              )
                              );

$slideshowLargeContent = array('slideshow-id' => 'the-experience-slideshow-large',
                              'slideshow-class' => 'slideshow-large',
                              'content-direction' => 'right',
                              'title' => 'Title',
                              'copy' => 'Content could be a brief info about museum programming - Etiam lacinia cursus ligula, vel efficitur eros scelerisque ac. Duis at eros ac risus pulvinar pulvinar. Proin ligula magna, sagittis vel arcu at, pretium convallis arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br>Nulla convallis eget orci nec facilisis. Integer tellus massa, volutpat eget consectetur id, dignissim nec felis. Cras eget neque in turpis vulputate egestas ac id mi. Pellentesque auctor odio bibendum lorem elementum, interdum porta odio suscipit.',
                              'slides' => array(
                                              array('src' => 'images/the-experience-slideshow-large-00.jpg',
                                                    'attribution' => 'TBD',
                                                    'url' => ''),
                                              array('src' => 'images/the-experience-slideshow-large-01.jpg',
                                                    'attribution' => 'TBD',
                                                    'url' => '')
                                          )
                              );
$slideshowContent = array('slideshow-id' => 'the-experience-slideshow',
                          'slideshow-class' => '',
                          'content-direction' => 'left',
                          'title' => 'Title',
                          'copy' => 'Content could be a brief info about museum’s neighborhood - Etiam lacinia cursus ligula, vel efficitur eros scelerisque ac. Duis at eros ac risus pulvinar pulvinar. Proin ligula magna, sagittis vel arcu at, pretium convallis arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. <br>Nulla convallis eget orci nec facilisis. Integer tellus massa, volutpat eget consectetur id, dignissim nec felis. Cras eget neque in turpis vulputate egestas ac id mi. Pellentesque auctor odio bibendum lorem elementum, interdum porta odio suscipit.',
                          'slides' => array(
                                          array('src' => 'images/the-experience-slideshow-00.jpg',
                                                'attribution' => 'TBD',
                                                'url' => ''),
                                          array('src' => 'images/the-experience-slideshow-01.jpg',
                                                'attribution' => 'TBD',
                                                'url' => '')
                                      )
                          );

include 'slideshow.php';
 ?>

<html lang="en">
<head>
  <?php include 'head.php'; ?>
</head>

<body class="page-the-experience">
  <?php include 'preloader.php'; ?>
  <?php include 'header.php'; ?>
  <section id="the-experience-content" class="main-content">
    <?php
      include 'feature.php';
      include 'about.php';
      //imgFullWidth($imgFullWidth['src'],$imgFullWidth['attribution']);
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
