<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/sidebar.php") ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
    <div class="form-group">
        <form method="post">
            <label for="name">Nama</label>
            <input class="form-control input100" type="text" name="name" placeholder="Name" value = "<?php echo $name?>" ?>
            <label for="name">Code</label>
            <input class="form-control input100" type="text" name="code" placeholder="Code" value = "<?php echo $code?>"?>
            <input type="submit" name="save" value="save" class="form-control btn btn-info">
        </form>
    </div>
    </section>
    </div>

<?php $this->load->view("template/footer.php") ?>
