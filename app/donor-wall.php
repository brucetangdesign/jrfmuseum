<!doctype html>

<?php
//Page title
$pageTitle = "Donor Wall";

//Page Content
$shuffleIcon = '
  <svg class="shuffle-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 374 263">
    <path d="M296.5,245.3l29.6-29.6h-69.9c-30.9,0-57.1-14.3-75.7-41.5c-12.9-18.8-17.8-37.5-18.4-40
      c-16.5-59.1-60.3-60.8-65.3-60.8l-0.6,0L0,73.4v-25h95.9c0.1,0,0.3,0,0.6,0c4.2,0,19.4,0.7,36.7,9.3c17.8,8.9,41.4,28.3,53,70
      l0.1,0.4c0.1,0.2,4.1,16.6,15,32.3c13.9,20.1,32.4,30.3,54.9,30.3h69.9L296.5,161l17.7-17.7l59.8,59.9L314.2,263L296.5,245.3z"/>
    <path d="M0,215.7v-25h100.1c22.5,0,40.9-10.2,54.9-30.3c0.8-1.1,1.5-2.3,2.3-3.5l4.6-7.3l13.4,25.5l-1.9,2.5
      c-18.5,24.9-43.8,38.1-73.3,38.1H0z"/>
    <path d="M180.7,100.5l1.1-2c12.7-23,29.5-34.9,41.3-40.8c17.3-8.7,32.5-9.3,36.7-9.3c0.2,0,0.4,0,0.6,0h66.7l-30.6-30.6
      L314.2,0L374,59.9l-59.8,59.9L296.5,102l28.6-28.6h-64.9l-0.7,0c-4.3,0-42.7,1.4-61.3,48.9l-4.7,12.1L180.7,100.5z"/>
  </svg>';

$donors = array(
array(
  'src' => 'images/donors/nike.svg',
  'name' => '',
  'size' => 'large',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => 'images/donors/yawkey.png',
  'name' => '',
  'size' => 'large',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => 'images/donors/nyc.svg',
  'name' => '',
  'size' => 'large',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => '',
  'name' => 'Joseph J. Plumeri',
  'size' => 'large',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => 'images/donors/dodgers.svg',
  'name' => '',
  'size' => 'medium',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => 'images/donors/citi.svg',
  'name' => '',
  'size' => 'medium',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => 'images/donors/yankees.svg',
  'name' => '',
  'size' => 'medium',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => 'images/donors/mets.svg',
  'name' => '',
  'size' => 'medium',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => 'images/donors/strada.png',
  'name' => '',
  'size' => 'medium',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => 'images/donors/tull.png',
  'name' => '',
  'size' => 'medium',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => 'images/donors/mlb.svg',
  'name' => '',
  'size' => 'medium',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => '',
  'name' => 'Richelieu Dennis',
  'size' => 'medium',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt volutpat dui, vel sodales odio consequat nec. Nullam rhoncus suscipit placerat. Vestibulum sit amet vulputate leo, nec auctor turpis.'
),
array(
  'src' => '',
  'name' => 'Levi Flores',
  'size' => 'small'
)
);
?>

<html lang="en">
<head>
  <?php include 'head.php'; ?>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/packery-mode.pkgd.min.js"></script>
  <script src="js/donor-wall.js"></script>
</head>

<body class="page-donor-wall">
  <?php include 'header.php'; ?>
  <section id="donor-wall-content" class="main-content">
    <a class="donor-shuffle-bt">
      <?php echo $shuffleIcon; ?>
      <span>Shuffle by Gift</span>
    </a>
    <div id="donor-grid-container" class="grid fade-in paused-animation">
      <div class="grid-sizer"></div>
      <?php
        foreach ($donors as $i => $row){
          echo '<div class="grid-item grid-item-'.$row['size'].'">';
              if(!empty($row['src'])){
                echo '<img src="'.$row['src'].'" />';
              }
              else{
                echo "<p>".$row['name']."</p>";
              }

              if(!empty($row['content'])){
                echo '<div class="donor-content"><p>'.$row['content'].'</p></div>';
              }
          echo'</div>';
        }
        for($j=0;$j<28;$j++){
          echo '<div class="grid-item grid-item-small"><p>FPO</p></div>';
        }
      ?>
    </div>
  </section>
  <?php include 'bottom-nav.php'; ?>
  <?php include 'footer.php'; ?>
</body>
</html>
