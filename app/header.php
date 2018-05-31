<?php include 'nav.php'; ?>
<header>
  <div>
    <div class="nav-icon">
      <svg viewBox="0 0 55 40">
        <line id="top" x1="0" y1="1" x2="55" y2="1"/>
        <line id="middle" x1="0" y1="20" x2="55" y2="20"/>
        <line id="bottom" x1="0" y1="39" x2="55" y2="39"/>
      </svg>
    </div>
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
