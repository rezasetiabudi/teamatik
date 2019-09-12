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

<a href="<?php echo base_url()?>index.php/Employee/create">Add</a>
<table class = "table table-bordered">
    <th>
        #
    </th>
    <th>
        Name
    </th>
    <?php 
        $count = count($list);
        for($i = 0; $i<$count; $i++){
            $x = $i + 1;
            echo '<tr>';
            echo '<td>'.$x.'</td>';
            echo '<td>'.$list[$i]["name"].'</td>';
            echo '</tr>';
        }
    ?>
</table>

<a href = "<?php echo base_url()?>">BACK</a>



