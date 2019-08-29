<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CSS Grid Modern Responsive Dashboard</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" type="image/png" href="#"><link rel="stylesheet" href="<?php echo base_url()?>assets/style.css">
</head>
<body>

<div class="grid">
  <aside class="sidenav">
    <div class="sidenav__brand">
      <i class="fas fa-box-open sidenav__brand-icon"></i>
      <a class="sidenav__brand-link" href="#">My<span class="text-light">Box</span></a>
      <i class="fas fa-times sidenav__brand-close"></i>
    </div>
    <div class="sidenav__profile">
      <div class="sidenav__profile-avatar"></div>
      <div class="sidenav__profile-title text-light">Brilliant Diamonds</div>
    </div>
    <div class="row row--align-v-center row--align-h-center">
      <ul class="navList">
        <li class="navList__heading">Data Log<i class="fas fa-database"></i></li>
          <li>
          <div class="navList__subheading row row--align-v-center">
            <span class="navList__subheading-icon"><i class="fas fa-keyboard"></i></span>
            <span class="navList__subheading-title">Technology</span>
          </div>
          <ul class="subList subList--hidden">
            <li class="subList__item">Electronic</li>
            <li class="subList__item">Account Priviledge</li>
            <li class="subList__item">Room Access</li>
          </ul>
        </li>
        <li>
          <div class="navList__subheading row row--align-v-center">
            <span class="navList__subheading-icon"><i class="fas fa-building"></i></span>
            <span class="navList__subheading-title">Facility</span>
          </div>
          <ul class="subList subList--hidden">
            <li class="subList__item">Meeting Room</li>
            <li class="subList__item">Event List</li>
            <li class="subList__item">Entertainment Center</li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>

  <div class="main__cards">
   <!-- CONTENT content -->
  </div> <!-- /.main-cards -->
  
  <footer class="footer">
    <p><span class="footer__copyright">&copy;</span> 2019 TEAMATIK</p>
    <p>Crafted with <i class="fas fa-heart footer__icon"></i> by Us</p>
  </footer>

</div>
<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
<script src='https://www.amcharts.com/lib/3/amcharts.js'></script>
<script src='https://www.amcharts.com/lib/3/serial.js'></script>
<script src='https://www.amcharts.com/lib/3/themes/light.js'></script>
<script  src="<?php echo base_url()?>assets/script.js"></script>

</body>
</html>