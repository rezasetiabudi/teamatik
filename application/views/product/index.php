<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/main.css">

<h1 class="center">PRODUCTS</h1>
<a href="<?php echo base_url()?>Product/create">
<button type="button" class="btn btn-success">
    Tabel
</button>
</a>
<table class = "table table-bordered">
    <th>#</th>
    <th>Name</th>
    <th>Category ID</th>
    <th>Purchase Year</th>
    <th>Price</th>
    <?php 
            $count = count($product);
            for($i = 0; $i<$count; $i++){
                $x = $i + 1;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$product[$i]["name"].'</td>';
                echo '<td>'.$product[$i]["category_id"].'</td>';
                echo '<td>'.$product[$i]["purchase_year"].'</td>';
                echo '<td>'.$product[$i]["price"].'</td>';
                echo '</tr>';
            }
        ?>
</table>

<a href = "<?php echo base_url()?>">BACK</a>