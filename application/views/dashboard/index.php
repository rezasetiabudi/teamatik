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
    <div class="box box-success" style="width: 100%; height: 90%">
      <!-- <div class="box-body" style="width: 500px;height: 500px"> -->
      <canvas id="myChart"></canvas>
      <!-- </div> -->
    </div>
  </section>
</div>

<!-- chartjs -->
<?php
$year = date("Y");
// $data = array("[$year]", "[$year+1]");
for ($test = 0; $test < 10; $test++) {
  $data[] = $year + $test;
}
echo join($data, ',');
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
        label: 'Depreciation',
        data: [12, 30, 3, 23, 2, 3, 4, 2, 1, 4],
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