<?php
$curr_action = $this->uri->segment(1). '/'. $this->uri->segment(2);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory Management by TeamAtik</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="margin : unset">
<div class="wrapper">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style = "padding-top : unset">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>adminlte2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <?php
        $dashboard = ($curr_action == 'Home/index' || $curr_action == base_url());
        $employee = ($curr_action == 'Employee/index' || $curr_action == 'Employee/create' || $curr_action == 'Employee/update') ;
        $position = ($curr_action == 'Position/index' || $curr_action == 'Position/create' || $curr_action == 'Position/update');
        $department = ($curr_action == 'Department/index' || $curr_action == 'Department/create' || $curr_action == 'Department/update');
        $category = ($curr_action == 'Category/index' || $curr_action == 'Category/create' || $curr_action == 'Category/update');
        $products = ($curr_action == 'Product/index' || $curr_action == 'Product/create' || $curr_action == 'Product/update');
      ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigation Menu</li>
        <li class="<?= $dashboard? 'active':''?>"><a href="<?php echo base_url()?>Home/index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li class=" <?= $employee? 'active':''?>">
          <a href="<?php echo base_url()?>Employee/index">
            <i class="fa fa-dashboard"></i>
            <span> Employee</span>
          </a>
        </li>
        
        <li class="<?= $products || $category? 'active':''?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="<?= $category? 'active':''?>"><a href="<?php echo base_url()?>Category/index"><i class="fa fa-circle-o"></i> <span>Category</span></a></li>
          <li class="<?= $products? 'active':''?>"><a href="<?php echo base_url()?>Product/index"><i class="fa fa-circle-o"></i> <span>List</span></a></li>
          </ul>
        </li>

        <li class="<?= $position || $department? 'active':''?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Position</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="<?= $department? 'active':''?>"><a href="<?php echo base_url()?>Department/index"><i class="fa fa-circle-o"></i> <span>Department</span></a></li>
          <li class="<?= $position? 'active':''?>"><a href="<?php echo base_url()?>Position/index"><i class="fa fa-circle-o"></i> <span>List</span></a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
</body>
</html>
