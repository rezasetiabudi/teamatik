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
    <div class ="box box-success">
      <div class ="box-body">
      <div class="pull-right" style="margin:10px">
        <a href="<?php echo base_url('Position/create')?>" class="btn btn-success">Add+</a>
      </div>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>#</th>
                <th>Position Name</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php   
          $i= 1;
            foreach($list as $rows){
          ?>
            <tr>
              <td>
                <?php echo $i?>
              </td>
              <td>
                <?php echo $rows['name']?>
              </td>
              <td>
                <?php echo $rows['department_id']?>
              </td>
              <td>
              <a href="<?php echo base_url('Position/update/')?><?php echo $rows['id']?>"><span class="glyphicon glyphicon-cog"></span></a>
              &nbsp
              &nbsp
              &nbsp
              &nbsp
              &nbsp
              <a href="<?php echo base_url('Position/delete/')?><?php echo $rows['id']?>"><span class="glyphicon glyphicon-trash" style="color:red"></span></a>              </td>
            </tr>
          <?php $i++;}?>
        </tbody>
    </table>
            </div>
            </div>
    </section>
  </div>
<!-- /.content -->