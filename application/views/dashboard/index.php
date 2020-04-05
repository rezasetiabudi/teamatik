<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url('Assets/chart.js') ?>"></script>

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
    <form method="post">
      <div class="form-group well form-horizontal">
        <label for="department">Product</label>
        <select class="form-control" name="product" id="product">
          <?php
          $count = count($allproduct);
          for ($i = 0; $i < $count; $i++) {
            if ($select == $allproduct[$i]["id_product"]) { ?>
              <option selected value="<?php echo $allproduct[$i]["id_product"] ?>"><?php echo $allproduct[$i]["product_name"] ?></option>
            <?php
              } else { ?>
              <option value="<?php echo $allproduct[$i]["id_product"] ?>"><?php echo $allproduct[$i]["product_name"] ?></option>
            <?php
              }
              ?>
          <?php
          }
          ?>

        </select>
      </div>
      <input type="submit" name="show" value="SHOW" class="form-control btn btn-info">
    </form>
    <div class="box box-success" style="width: 100%; height: 90%">
      <!-- <div class="box-body" style="width: 500px;height: 500px"> -->
      <canvas id="myChart"></canvas>
      <!-- </div> -->
    </div>
  </section>
</div>

<!-- chartjs -->
<?php
$date = DateTime::createFromFormat("Y-m-d", $product[0]["date_encode"]);
$year = $date->format("Y");
// $idcategory = $product[0]["id_category"];
$tahundepresiasi = $category[0]["depreciation"] + 1;
$priceproduct = $product[0]["price"];
$depresiasi = ($product[0]["price"] - $product[0]["residu"]) / $tahundepresiasi;
// $year = date("Y");
// $data = array("[$year]", "[$year+1]");
for ($test = 0; $test < $tahundepresiasi; $test++) {
  $data[] = $year + $test;
  if ($test > 0) {
    $priceproduct = $priceproduct - $depresiasi;
    $price[] = $priceproduct;
  } else {
    $price[] = $product[0]["price"];
  }
}

?>
<script>
  var d = new Date();
  var n = d.getFullYear();
</script>
<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php echo join($data, ',') ?>],
      datasets: [{
        label: 'Depreciation <?php echo $product[0]["product_name"] ?>',
        data: [<?php echo join($price, ',') ?>],
        backgroundColor: 'rgba(54, 162, 235, 1)',
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>
<!-- chartjs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- /.content -->