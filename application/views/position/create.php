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
            <div class="form-group">
                <form method="post" class="form-control">
                    <input class="input100" type="text" name="name" placeholder="Name" ?>
                    <select class="form-control" name="department">
                        <?php
                        $count = count($department);
                        for ($i = 0; $i < $count; $i++) {
                            echo '<option value="' . $department[$i][id] . '">' . $department[$i][name] . '</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" name="save" value="save">
                </form>
            </div>

            <a href="<?php echo base_url() ?>Position/index">BACK</a>
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