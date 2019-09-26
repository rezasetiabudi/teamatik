<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Inventory Management System | Teamatik</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href="#">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/style.css" type="text/css">

</head>

<body>
  <!-- header & setting account -->
  <div class="grid">
    <header class="header">
      <i class="fas fa-bars header__menu"></i>
      <div class="header__search">
        <input class="header__input" placeholder="Search..." />
      </div>
      <div class="header__avatar">
        <i class="fas fa-user-cog fa-2x"></i>
        <div class="dropdown">
          <ul class="dropdown__list">
            <li class="dropdown__list-item">
              <span class="dropdown__icon"><i class="far fa-user"></i></span>
              <span class="dropdown__title">my profile</span>
            </li>
            <li class="dropdown__list-item">
              <span class="dropdown__icon"><i class="fas fa-clipboard-list"></i></span>
              <span class="dropdown__title">my account</span>
            </li>
            <li class="dropdown__list-item">
              <span class="dropdown__icon"><i class="fas fa-sign-out-alt"></i></span>
              <a class="dropdown__title" href="<?= base_url('/Home/logout') ?>">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <?php $this->load->view("template/sidenavbar.php") ?>

    <!-- BANNER banner -->
    <main class="main">
      <div class="main-header">
        <div class="main-header__intro-wrapper">
          <div class="main-header__welcome">
            <div class="main-header__welcome-title text-light">Welcome, on <strong>Dashboard</strong></div>
            <div class="main-header__welcome-subtitle text-light">How are you today?</div>
          </div>
          <div class="quickview">
            <div class="quickview__item">
              <div class="quickview__item-total">12</div>
              <div class="quickview__item-description">
                <i class="far fa-calendar-alt"></i>
                <span class="text-light">Events</span>
              </div>
            </div>
            <div class="quickview__item">
              <div class="quickview__item-total">9</div>
              <div class="quickview__item-description">
                <i class="far fa-comment"></i>
                <span class="text-light">Messages</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CONTENT content -->
      <div class="main-overview">
        <div class="overviewCard">
          <div class="overviewCard-icon overviewCard-icon--document">
            <i class="far fa-file-alt"></i>
          </div>
          <div class="overviewCard-description">
            <h3 class="overviewCard-title text-light">New <strong>Document</strong></h3>
            <p class="overviewCard-subtitle"></p>
          </div>
        </div>
        <div class="overviewCard">
          <div class="overviewCard-icon overviewCard-icon--calendar">
            <i class="far fa-calendar-check"></i>
          </div>
          <div class="overviewCard-description">
            <h3 class="overviewCard-title text-light">Upcoming <strong>Event</strong></h3>
            <p class="overviewCard-subtitle">Chili Cookoff</p>
          </div>
        </div>
        <div class="overviewCard">
          <div class="overviewCard-icon overviewCard-icon--mail">
            <i class="far fa-envelope"></i>
          </div>
          <div class="overviewCard-description">
            <h3 class="overviewCard-title text-light">Recent <strong>Emails</strong></h3>
            <p class="overviewCard-subtitle">+2</p>
          </div>
        </div>
      </div>
      <!-- /.main__overview -->
      <div class="main__cards">
        <div class="card">
          <div class="card__header">
            <div class="card__header-title text-light">Your <strong>Events</strong>
              <a href="#" class="card__header-link text-bold">View All</a>
            </div>
            <div class="settings">
              <div class="settings__block"><i class="fas fa-edit"></i></div>
              <div class="settings__block"><i class="fas fa-cog"></i></div>
            </div>
          </div>
          <div class="card__main">
            <div class="card__row">
              <div class="card__icon"><i class="fas fa-gift"></i></div>
              <div class="card__time">
                <div>today</div>
              </div>
              <div class="card__detail">
                <div class="card__source text-bold">Jonathan G</div>
                <div class="card__description">Going away party at 8:30pm. Bring a friend!</div>
                <div class="card__note">1404 Gibson St</div>
              </div>
            </div>
            <div class="card__row">
              <div class="card__icon"><i class="fas fa-plane"></i></div>
              <div class="card__time">
                <div>Tuesday</div>
              </div>
              <div class="card__detail">
                <div class="card__source text-bold">Matthew H</div>
                <div class="card__description">Flying to Bora Bora at 4:30pm</div>
                <div class="card__note">Delta, Gate 27B</div>
              </div>
            </div>
            <div class="card__row">
              <div class="card__icon"><i class="fas fa-book"></i></div>
              <div class="card__time">
                <div>Thursday</div>
              </div>
              <div class="card__detail">
                <div class="card__source text-bold">National Institute of Science</div>
                <div class="card__description">Join the institute for an in-depth look at Stephen Hawking</div>
                <div class="card__note">7:30pm, Carnegie Center for Science</div>
              </div>
            </div>
            <div class="card__row">
              <div class="card__icon"><i class="fas fa-heart"></i></div>
              <div class="card__time">
                <div>Friday</div>
              </div>
              <div class="card__detail">
                <div class="card__source text-bold">24th Annual Heart Ball</div>
                <div class="card__description">Join us and contribute to your favorite local charity.</div>
                <div class="card__note">6:45pm, Austin Convention Ctr</div>
              </div>
            </div>
            <div class="card__row">
              <div class="card__icon"><i class="fas fa-heart"></i></div>
              <div class="card__time">
                <div>Saturday</div>
              </div>
              <div class="card__detail">
                <div class="card__source text-bold">Little Rock Air Show</div>
                <div class="card__description">See the Blue Angels fly with roaring thunder</div>
                <div class="card__note">11:00pm, Jacksonville Airforce Base</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__header">
            <div class="card__header-title text-light">Recent <strong>Documents</strong>
              <a href="#" class="card__header-link text-bold">View All</a>
            </div>
            <div class="settings">
              <div class="settings__block"><i class="fas fa-edit"></i></div>
              <div class="settings__block"><i class="fas fa-cog"></i></div>
            </div>
          </div>
          <div class="card">
            <div class="documents">
              <div class="document">
                <div class="document__img"></div>
                <div class="document__title">tesla-patents</div>
                <div class="document__date">07/16/2018</div>
              </div>
              <div class="document">
                <div class="document__img"></div>
                <div class="document__title">yearly-budget</div>
                <div class="document__date">09/04/2018</div>
              </div>
              <div class="document">
                <div class="document__img"></div>
                <div class="document__title">top-movies</div>
                <div class="document__date">10/10/2018</div>
              </div>
              <div class="document">
                <div class="document__img"></div>
                <div class="document__title">trip-itinerary</div>
                <div class="document__date">11/01/2018</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card card--finance">
          <div class="card__header">
            <div class="card__header-title text-light">Monthly <strong>Spending</strong>
              <a href="#" class="card__header-link text-bold">View All</a>
            </div>
            <div class="settings">
              <div class="settings__block"><i class="fas fa-edit"></i></div>
              <div class="settings__block"><i class="fas fa-cog"></i></div>
            </div>
          </div>
          <div id="chartdiv"></div>
        </div>
      </div> <!-- /.main-cards -->
    </main>

    <footer class="footer">
      <p><span class="footer__copyright">&copy;</span> 2019 Teamatik</p>
    </footer>
  </div>
  <!-- partial -->
  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src='https://www.amcharts.com/lib/3/amcharts.js'></script>
  <script src='https://www.amcharts.com/lib/3/serial.js'></script>
  <script src='https://www.amcharts.com/lib/3/themes/light.js'></script>
  <script src="<?php echo base_url() ?>/assets/script.js"></script>

</body>

</html>