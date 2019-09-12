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
            <select class = "form-control" name="department">
            <?php
                $count = count($department);
                for($i = 0; $i<$count; $i++){
                    echo '<option value="'.$department[$i][id].'">'.$department[$i][name].'</option>';
                }
            ?>
            </select>
            <input type="submit" name="save" value="save">
        </form>
    </div>

    <a href = "<?php echo base_url()?>index.php/Employee/index">BACK</a>
</html>