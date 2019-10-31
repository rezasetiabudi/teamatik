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
<<<<<<< HEAD
                <th>Name</th>
                <th>Action</th>
=======
                <th>Position Name</th>
                <th>Department</th>
>>>>>>> 78294f53ec8d7a32a53bd1c7da8d09fd2535bcc2
            </tr>
        </thead>
        <tbody>
          <?php 
<<<<<<< HEAD
          $i = 1;
=======
>>>>>>> 78294f53ec8d7a32a53bd1c7da8d09fd2535bcc2
            foreach($list as $rows){
          ?>
            <tr>
              <td>
<<<<<<< HEAD
                <?php echo $i?>
=======
                <?php echo 1?>
>>>>>>> 78294f53ec8d7a32a53bd1c7da8d09fd2535bcc2
              </td>
              <td>
                <?php echo $rows['name']?>
              </td>
              <td>
<<<<<<< HEAD
                <a href="<?php echo base_url('Department/update/')?><?php echo $rows['id']?>">Update</a>
              </td>
            </tr>
          <?php $i++;}?>
=======
                <?php echo $rows['department_id']?>
              </td>
              <td>
                <a href="<?php echo base_url('Position/update/')?><?php echo $rows['id']?>">Update</a>
              </td>
            </tr>
          <?php }?>
>>>>>>> 78294f53ec8d7a32a53bd1c7da8d09fd2535bcc2
        </tbody>
    </table>
    </section>
  </div>
<!-- /.content -->