<!doctype html>

<?php
$content = array(
          array('class' => 'index-man',
                'title' => 'The<br>Man',
                'copy' => 'Jackie Robinson',
                'img' => 'home-feature-man.png',
                'bg-img' =>''),
          array('class' => 'index-movement',
                'title' => 'The<br>Movement',
                'copy' => 'Civil Rights',
                'img' => 'home-feature-movement.png',
                'bg-img' =>''),
          array('class' => 'index-experience',
                'title' => 'The<br>Experience',
                'copy' => 'Jackie Robinson Museum',
                'img' => 'home-feature-experience.png',
                'bg-img' =>'')
        );
 ?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The Jackie Robinson Museum | Home</title>
  <meta name="" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body class="page-index">
  <?php include 'header.php'; ?>
  <section id="index-content" class="main-content">
    <?php
    //Populate Index sections
    foreach ($content as $i => $row){
        echo '<section class="'.$row['class'].' three-col">';
          echo '<div class="index-content-container">';
            echo '<h2>'.$row['title'].'</h2>';
            echo '<p>'.$row['copy'].'</p>';
          echo '</div>';
          echo '<div class="index-image" style="background-image:url(images/'.$row['img'].');"></div>';
        echo '</section>';
    }
    ?>
  </section>
  <?php include 'footer.php'; ?>
</body>
</html>
