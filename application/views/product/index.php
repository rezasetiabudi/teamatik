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
      Product
      <small>List</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Product</li>
    </ol>
  </section>
  <section class="content">
    <div class="pull-right" style="margin:10px">
      <a href="<?php echo base_url('Product/create') ?>" class="btn btn-success">add+</a>
    </div>
    <table id="myTable" class="display">
      <thead>
        <tr>#</tr>
        <tr>id</tr>
        <tr>prefix_code</tr>
        <tr>product_code</tr>
        <tr>name</tr>
        <tr>category_id</tr>
        <tr>purchase_year</tr>
        <tr>price</tr>
        <tr>status</tr>
      </thead>
      <tbody>
        <?php 
        $i = 1;
        foreach() {
        ?>
        <?php $i++;}?>
      </tbody>
    </table>
    <?php echo $output ?>
  </section>
</div>
<!-- /.content -->