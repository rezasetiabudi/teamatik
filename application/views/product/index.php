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

    <div class="box box-success">
      <div class="box-body">
        <div class="pull-right" style="margin:10px">
          <a href="<?php echo base_url('Product/create') ?>" class="btn btn-success">Add+</a>
        </div>
        <table id="myTable" class="display">
          <thead>
            <tr>
              <th>#</th>
              <th>id</th>
              <th>Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Date Encode</th>
              <th>Date Expired</th>
              <th>Qty</th>
              <th>Supplier</th>
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
                  <?php echo $rows['id_product'] ?>
                </td>
                <td>
                  <?php echo $rows['product_name'] ?>
                </td>
                <td>
                  <?php echo $rows['category_name'] ?>
                </td>
                <td>
                  <?php echo $rows['price'] ?>
                </td>
                <td>
                  <?php echo $rows['date_encode'] ?>
                </td>
                <td>
                  <?php echo $rows['date_expired'] ?>
                </td>
                <td>
                  <?php echo $rows['product_qty'] ?>
                </td>
                <td>
                  <?php echo $rows['supplier_name'] ?>
                </td>

                <td>
                  <a class="btn" href="<?php echo base_url('Product/update/') ?><?php echo $rows['id_product'] ?>"><span class="glyphicon glyphicon-cog"></span></a>
                  <a class="btn" data-toggle="modal" href="" data-target="#qrModal<?php echo $rows['id_product'] ?>"><span class="glyphicon glyphicon-qrcode" style="color:black"></span></a>
                  <a class="btn" data-toggle="modal" data-target="#deleteModal<?php echo $rows['id_product'] ?>"><span class="glyphicon glyphicon-trash" style="color:red"></span></a> </td>
              </tr>
              <div class="modal fade" id="deleteModal<?php echo $rows['id_product'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <a type="button" class="btn btn-danger" href="<?php echo base_url('Product/delete/') ?><?php echo $rows['id_product'] ?>">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="qrModal<?php echo $rows['id_product'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div id="printThis<?php echo $rows['id_product'] ?>" class="modal-body">
                    </div>
                    <div class="modal-footer">
                      <button type="button" id="Print<?php echo $rows['id_product'] ?>" class="btn btn-primary">Print</button>
                    </div>
                  </div>
                </div>
              </div>
              <script>
                document.getElementById("Print<?php echo $rows['id_product'] ?>").onclick = function() {
                  printElement(document.getElementById("printThis<?php echo $rows['id_product'] ?>"));
                };

                function printElement(elem) {
                  var domClone = elem.cloneNode(true);

                  var $printSection = document.getElementById("printSection<?php echo $rows['id_product'] ?>");

                  if (!$printSection) {
                    var $printSection = document.createElement("div");
                    $printSection.id = "printSection";
                    document.body.appendChild($printSection);
                  }

                  $printSection.innerHTML = "";
                  $printSection.appendChild(domClone);
                  window.print();
                }
                $(function() {
                  $("#printThis<?php echo $rows['id_product'] ?>").append("<p align='center'><img class='to-print' src='http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=<?php echo $rows['id_product'] ?>&chld=H|0'/></p>");
                })
              </script>

            <?php $i++;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
<style type="text/css">
  @media screen {
    #printSection {
      display: none;
    }
  }

  @media print {
    body * {
      visibility: hidden;
    }

    #printSection,
    #printSection * {
      visibility: visible;
    }

    #printSection {
      position: absolute;
      left: 0;
      top: 0;
    }
  }
</style>
<!-- /.content -->