<!doctype html>

<?php
//Page title
$pageTitle = "The Man";
$newsletterClass= "newsletter-the-man content-right";
$newsletterQuoteContent = array('img' => 'images/newsletter-the-man.png',
                                'quote' => 'A life is not important except in the impact it has on other lives.',
                                'attribution' => 'Jackie Robinson');

//Page Content
$content = array(
          array('class' => 'index-man',
                'title' => 'The<br>Man',
                'copy' => 'Jackie Robinson',
                'img' => 'home-feature-man.png',
                'img-shadow' => 'home-feature-man-shadow.png',
                'img-mobile' => 'home-feature-man-sm.png',
                'bg-img' =>'home-feature-man-bg.svg',
                'url' =>'the-man.php'),
          array('class' => 'index-movement',
                'title' => 'The<br>Movement',
                'copy' => 'Civil Rights',
                'img' => 'home-feature-movement.png',
                'img-shadow' => 'home-feature-movement-shadow.png',
                'img-mobile' => 'home-feature-movement-sm.png',
                'bg-img' =>'home-feature-movement-bg.svg',
                'url' =>'the-movement.php'),
          array('class' => 'index-experience',
                'title' => 'The<br>Experience',
                'copy' => 'Jackie Robinson Museum',
                'img' => 'home-feature-experience.png',
                'img-shadow' => 'home-feature-experience-shadow.png',
                'img-mobile' => 'home-feature-experience-sm.png',
                'bg-img' =>'home-feature-experience-bg.svg',
                'url' =>'the-experience.php')
        );
 ?>

<html lang="en">
<head>
  <?php include 'head.php'; ?>
</head>

<body class="page-index">
  <?php include 'header.php'; ?>
  <section id="index-content" class="main-content">
    <?php

    ?>
  </section>
  <?php include 'newsletter-sign-up.php'; ?>
  <?php include 'bottom-nav.php'; ?>
  <?php include 'footer.php'; ?>
</body>
</html>
