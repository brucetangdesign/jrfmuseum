<header>
  <div>
    <div class="mobile-nav-icon hidden-desktop"></div>
    <div class="header-logo">
      <?php
        if ($pageTitle!="Home"){
          echo '<a href="index.php">';
            include 'logo.php';
          echo '</a>';
        }
        else{
          include 'logo.php';
        }
      ?>
    </div>
    <a class="btn donate-btn" href="https://www.jackierobinson.org/event/donatenow/" target="_blank">Donate</a>
  </div>
  <p class="header-info">Opening 2019</p>
</header>
