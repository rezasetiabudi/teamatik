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
      Employee
      <!-- <small>Control panel</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Employee</li>
    </ol>
  </section>
  <section class="content">
    <div class="box box-success">
      <div class="box-body">
        <div class="pull-right" style="margin:10px">
          <a href="<?php echo base_url('Employee/create') ?>" class="btn btn-success"><b>Add</b> <span class="glyphicon glyphicon-plus"></span></a>
        </div>
        <table id="myTable" class="display">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Posisi</th>
              <th>Nomor Telepon</th>
              <th>Email</th>
              <th>Status</th>
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
                  <?php echo $rows['employees_name'] ?>
                </td>
                <td>
                  <?php echo $rows['position_id'] ?>
                </td>
                <td>
                  <?php echo $rows['employees_contact'] ?>
                </td>
                <td>
                  <?php echo $rows['employees_address'] ?>
                </td>
                <td>
                  <?php if ($rows['status'] == 1) echo 'Active';
                    else echo 'Inactive'; ?>
                </td>
                <td>
                  <a class="btn" href="<?php echo base_url('Employee/update/') ?><?php echo $rows['id_employees'] ?>"><span class="glyphicon glyphicon-cog"></span></a>

                  <a class="btn" data-toggle="modal" data-target="#deleteModal<?php echo $rows['id_employees'] ?>"><span class="glyphicon glyphicon-trash" style="color:red"></span></a>
                </td>
              </tr>
              <div class="modal fade" id="deleteModal<?php echo $rows['id_employees'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Tekan delete untuk menghapus data
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a type="button" class="btn btn-danger" href="<?php echo base_url('Employee/delete/') ?><?php echo $rows['id_employees'] ?>">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php $i++;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
<!-- /.content -->