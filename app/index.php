<!doctype html>

<?php
//Page title
$pageTitle = "Home";

//Page Content
$content = array(
          array('class' => 'index-man',
                'title' => 'The<br>Man',
                'copy' => 'Jackie Robinson',
                'img' => 'images/home-feature-man-lg.png',
                'img-shadow' => 'images/home-feature-man-shadow-lg.png',
                'img-mobile' => 'images/home-feature-man-sm.png',
                'bg-img' =>'images/home-feature-man-bg.svg',
                'url' =>'the-man.php'),
          array('class' => 'index-movement',
                'title' => 'The<br>Movement',
                'copy' => 'Civil Rights',
                'img' => 'images/home-feature-movement-lg.png',
                'img-shadow' => 'images/home-feature-movement-shadow-lg.png',
                'img-mobile' => 'images/home-feature-movement-sm.png',
                'bg-img' =>'images/home-feature-movement-bg.svg',
                'url' =>'the-movement.php'),
          array('class' => 'index-experience',
                'title' => 'The<br>Experience',
                'copy' => 'Jackie Robinson Museum',
                'img' => 'images/home-feature-experience-lg.png',
                'img-shadow' => 'images/home-feature-experience-shadow-lg.png',
                'img-mobile' => 'images/home-feature-experience-sm.png',
                'bg-img' =>'images/home-feature-experience-bg.svg',
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
    //Populate Index sections
    foreach ($content as $i => $row){
        echo '<section class="'.$row['class'].' three-col full-width-mobile">';
          echo '<a href="'.$row['url'].'">';
            echo '<div class="index-bg-image" style="background-image:url('.$row['bg-img'].');"></div>';
            echo '<div class="index-image">
                    <div class="index-shadow-img hidden-mobile" style="background-image:url('.$row['img-shadow'].')"></div>
                    <div class="index-main-img hidden-mobile" style="background-image:url('.$row['img'].')"></div>
                    <img class="hidden-desktop" src="'.$row['img-mobile'].'" />
                  </div>';
            echo '<div class="index-content-container">';
              echo '<h2>'.$row['title'].'</h2>';
              echo '<p class="large-body">'.$row['copy'].'</p>';
            echo '</div>';
          echo '</a>';
        echo '</section>';
    }
    ?>
  </section>
  <?php include 'footer.php'; ?>
</body>
</html>
