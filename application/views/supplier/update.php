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
    <div class="form-group">
      <form method="post">
        <div class="form-group well form-horizontal">
          <label for="name">Name</label>
          <input class="form-control input100" type="text" name="name" placeholder="Name" value="<?php echo $name ?>" ?>
          <label for="name">Contact</label>
          <input class="form-control input100" type="text" name="contact" placeholder="Contact" value="<?php echo $contact ?>" ?>
          <label for="name">Address</label>
          <input class="form-control input100" type="text" name="address" placeholder="Address" value="<?php echo $address ?>" ?>
        </div>
        <input type="submit" name="save" value="save" class="form-control btn btn-info">
      </form>
    </div>
  </section>
</div>

<?php $this->load->view("template/footer.php") ?>