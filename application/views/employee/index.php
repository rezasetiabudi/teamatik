<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    foreach ($css_files as $file) : ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

    <?php endforeach; ?>

    <meta charset="UTF-8">
    <title>Inventory Management System | Teamatik</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="#">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/style.css" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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


            <!-- CONTENT content -->

            <!-- /.main__overview -->


            <div class="container">
                <?php echo $output; ?>
            </div>
    </div>



    </main>

    <footer class="footer">
        <p><span class="footer__copyright">&copy;</span> 2019 Teamatik</p>
    </footer>
    </div>
</body>
<?php foreach ($js_files as $file) : ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<script src="<?php echo base_url() ?>/assets/script.js"></script>

</html>