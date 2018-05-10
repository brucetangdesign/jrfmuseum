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
$featureContent = array('content-class' => 'left-content',
                        'title' => 'The<br>Man',
                        'copy' => 'FPO - Pioneer & civil rights activist, Jackie Robinson broke the color barrier, becoming the first African American in professional baseball.',
                        'img' => 'images/the-man-feature.png',
                        'bg-img' => 'images/the-man-feature-bg.svg',
                        'bg-cover-img' => 'images/the-man-feature-bg-cover.svg',
                        'highlight-text' => 'Jackie Robinson'
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


  </section>
  <?php include 'newsletter-sign-up.php'; ?>
  <?php include 'bottom-nav.php'; ?>
  <?php include 'footer.php'; ?>
</body>
</html>
