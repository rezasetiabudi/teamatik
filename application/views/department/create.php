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
      <div class="box-body">
        <form method="post">
          <div class="form-group well form-horizontal">
            <label for="name">Nama</label>
            <input class="form-control input100" type="text" name="department_name" placeholder="Name" ?>
          </div>
          <div>
            <div class="box-footer">
              <a href="<?php echo base_url('Department/index') ?>" class="btn btn-default"><span class="glyphicon glyphicon-menu-left"></span> Back</a>
              <div class="pull-right">
                <button type="submit" name="save" value = "save" class="btn btn-success">Save&nbsp <span class="glyphicon glyphicon-floppy-disk"></span></button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </section>
</div>

<?php $this->load->view("template/footer.php") ?>