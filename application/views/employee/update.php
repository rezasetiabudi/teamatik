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
          <label for="name">Nama</label>
          <input class="form-control input100" type="text" name="name" value="<?php echo $name ?>" ?>
          <label for="email">E-Mail</label>
          <input class="form-control input100" type="text" name="email" placeholder="E-mail" value="<?php echo $email ?>" ?>
          <label for="phone">Phone Number</label>
          <input class="form-control input100" type="text" name="phone" placeholder="Phone" value="<?php echo $phone ?>" ?>
          <label for="position">Position</label>
          <select class="form-control" name="position">
            <?php
            $count = count($posisi);
            for ($i = 0; $i < $count; $i++) {
              if ($position == $posisi[$i][id_position]) {
                echo '<option selected value="' . $posisi[$i][id_position] . '">' . $posisi[$i][position_name] . '</option>';
              } else {
                echo '<option value="' . $posisi[$i][id_position] . '">' . $posisi[$i][position_name] . '</option>';
              }
            }
            ?>
          </select>
          <label for="status">Status Karyawan</label>
          <select class="form-control" name="status">
            <?php if ($status == 0) { ?>
              <option selected value="0">Inactive</option>
              <option value="1">Active</option>
            <?php } else { ?>
              <option value="0">Inactive</option>
              <option selected value="1">Active</option>
            <?php } ?>
          </select>

        </div>
        <input type="submit" name="save" value="save" class="form-control btn btn-info">
      </form>
    </div>
  </section>
</div>

<?php $this->load->view("template/footer.php") ?>