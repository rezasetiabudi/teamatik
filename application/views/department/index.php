<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
      $('#myTable').DataTable();
      } );
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
        <a href="<?php echo base_url('Employee/create')?>" class="btn btn-success">Add+</a>
      </div>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>#</th>
                <th>Position Name</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
          <?php 
            foreach($list as $rows){
          ?>
            <tr>
              <td>
                <?php echo 1?>
              </td>
              <td>
                <?php echo $rows['name']?>
              </td>
              <td>
                <?php echo $rows['department_id']?>
              </td>
              <td>
                <a href="<?php echo base_url('Position/update/')?><?php echo $rows['id']?>">Update</a>
              </td>
            </tr>
          <?php }?>
        </tbody>
    </table>
    </section>
  </div>
<!-- /.content -->