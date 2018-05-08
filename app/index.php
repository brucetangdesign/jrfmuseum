<!doctype html>

<?php
//Page title
$pageTitle = "Home";

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
  <meta charset="utf-8">
  <?php include 'head.php'; ?>
</head>

<body class="page-index">
  <?php include 'header.php'; ?>
  <section id="index-content" class="main-content">
    <?php
    //Populate Index sections
    foreach ($content as $i => $row){
        echo '<section class="'.$row['class'].' three-col full-width-mobile">';
          echo '<a href="">';
            echo '<div class="index-bg-image">
                    <img src="images/'.$row['bg-img'].'" />
                  </div>';
            echo '<div class="index-image">
                    <img class="index-shadow-img hidden-mobile" src="images/'.$row['img-shadow'].'" />
                    <img class="index-main-img hidden-mobile" src="images/'.$row['img'].'" />
                    <img class="hidden-desktop" src="images/'.$row['img-mobile'].'" />
                  </div>';
            echo '<div class="index-content-container">';
              echo '<h2>'.$row['title'].'</h2>';
              echo '<p>'.$row['copy'].'</p>';
            echo '</div>';
          echo '</a>';
        echo '</section>';
    }
    ?>
  </section>
  <?php include 'footer.php'; ?>
</body>
</html>
