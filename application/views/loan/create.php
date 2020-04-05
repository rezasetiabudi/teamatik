<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/sidebar.php") ?>

<style>
    input[type=text]:focus {
        border: 2px solid #555;
    }
</style>

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
        <div class="form-group">
            <form method="post">
                <div class="form-group well form-horizontal">
                    <label for="department">Product</label>
                    <select class="form-control" name="product" id="product">
                        <option>-Select Kategori-</option>
                        <?php
                        $count = count($product);
                        for ($i = 0; $i < $count; $i++) { ?>
                            <option value="<?php echo $product[$i]["id_product"] ?>"><?php echo $product[$i]["product_name"] ?></option>
                        <?php
                        }
                        ?>

                    </select>
                    <?php if ($this->session->flashdata('stok') == TRUE) { ?>
                        <div role="alert" id="alert" class="alert alert-danger alert-dismissible" style="text-align:center; margin-top:10px">
                            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span>
                            </button>
                            <p><?php echo $this->session->flashdata('stok') ?></p>
                        </div>
                        <script>
                            window.setTimeout(function() {
                                $("#alert").fadeTo(500, 0).slideUp(500, function() {
                                    $(this).remove();
                                });
                            }, 3000);
                        </script>
                    <?php } ?>
                    <label for="department">Employee</label>
                    <select class="form-control" name="employee" id="product">
                        <option>-Select Kategori-</option>
                        <?php
                        $count = count($employee);
                        for ($i = 0; $i < $count; $i++) { ?>
                            <option value="<?php echo $employee[$i]["id_employees"] ?>"><?php echo $employee[$i]["employees_name"] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label for="phone">Borrow date</label>
                    <input class="form-control input100" type="date" name="borrow_date" placeholder="Borrow Date">
                    <label for="phone">Expired Return Date</label>
                    <input class="form-control input100" type="date" name="expired_date" placeholder="Expired Return Date">
                </div>
                <div class="box-footer">
                    <a href="<?php echo base_url('Loan/index') ?>" class="btn btn-default"><span class="glyphicon glyphicon-menu-left"></span> Back</a>
                    <div class="pull-right">
                        <button type="submit" value="save" name="save" class="btn btn-success">Save&nbsp <span class="glyphicon glyphicon-floppy-disk"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<?php $this->load->view("template/footer.php") ?>