<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>

<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
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
    <div class="pull-right" style="margin:10px">
      <a href="<?php echo base_url('Product/create') ?>" class="btn btn-success">Add+</a>
    </div>
    <table id="myTable" class="display">
      <thead>
        <tr>
          <th>#</th>
          <th>Product Code</th>
          <th>Name</th>
          <th>Category id</th>
          <th>Purchase_year</th>
          <th>status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($list as $rows) {
          ?>
          <tr>
            <td>
              <?php echo $i ?>
            </td>
            <td>
              <?php echo $rows['product_code'] ?>
            </td>
            <td>
              <?php echo $rows['name'] ?>
            </td>
            <td>
              <?php echo $rows['category_id'] ?>
            </td>
            <td>
              <?php echo $rows['purchase_year'] ?>
            </td>
            <td>
              <?php if ($rows['status'] == 1) echo 'Active';
                else echo 'Inactive'; ?>
            </td>
            <td>
              <a href="<?php echo base_url('Product/update/') ?><?php echo $rows['product_code'] ?>">Update</a>
            </td>
          </tr>
        <?php $i++;
        } ?>
      </tbody>
    </table>
  </section>
</div>
<!-- /.content -->