<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/sidebar.php") ?>

<style>
input[type=text]:focus {
  border: 2px solid #555;
}
</style>

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
    <div class="box box-success">
      <div class = "box-body">
      <form method="post">
        <div class="form-group well form-horizontal">
          <label for="name">Id</label>
          <input class="form-control input100" type="text" name="id" placeholder="Id" ?>
          <label for="name">Name</label>
          <input class="form-control input100" type="text" name="name" placeholder="Name" ?>
          <label for="name">Contact</label>
          <input class="form-control input100" type="text" name="contact" placeholder="Contact" ?>
          <label for="name">Address</label>
          <input class="form-control input100" type="text" name="address" placeholder="Address" ?>
        </div>
        <div class="box-footer">
          <a href="<?php echo base_url('supplier/index')?>" class="btn btn-default" ><span class="glyphicon glyphicon-menu-left"></span> Back</a>
          <div class = "pull-right">
            <input type="submit" name="save" value="save" class="form-control btn btn-info">
          </div>
        </div>
      </form>
    </div>
  </section>
</div>

<?php $this->load->view("template/footer.php") ?>
