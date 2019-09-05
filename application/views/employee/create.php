<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
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
    <div class="form-group">
        <form method="post" class="form-control">
        <input class="input100" type="text" name="name" placeholder="Name"?>
        <input class="input100" type="text" name="email" placeholder="E-mail"?>
        <input class="input100" type="text" name="phone" placeholder="Phone"?>
            <select class = "form-control" name="position">
            <?php
                $count = count($posisi);
                for($i = 0; $i<$count; $i++){
                    echo '<option value="'.$posisi[$i][id].'">'.$posisi[$i][name].'</option>';
                }
            ?>
            </select>
            <select class = "form-control" name="status">
                <option value="0">Inactive</option>
                <option value="1">Active</option>
            </select>
            <input type="submit" name="save" value="save">
        </form>
    </div>

    <a href = "<?php echo base_url()?>">BACK</a>
</html>