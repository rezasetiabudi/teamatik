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
                    <label for="product">Product</label>
                    <select class="form-control" name="product">
                        <?php
                        $count = count($product);
                        for ($j = 0; $j < $count; $j++) {
                            if ($productname == $product[$j]['id_product']) {
                                echo '<option selected value="' . $product[$j]['id_product'] . '">' . $product[$j]['product_name'] . '</option>';
                            } else {
                                echo '<option value="' . $product[$j]['id_product'] . '">' . $product[$j]['product_name'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                    <label for="employee">Employee</label>
                    <select class="form-control" name="employee">
                        <?php
                        $countemployee = count($employee);
                        for ($k = 0; $k < $countemployee; $k++) {
                            if ($employeename == $employee[$k]['id_employees']) {
                                echo '<option selected value="' . $employee[$k]['id_employees'] . '">' . $employee[$k]['employees_name'] . '</option>';
                            } else {
                                echo '<option value="' . $employee[$k]['id_employees'] . '">' . $employee[$k]['employees_name'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                    <label for="email">Borrow date</label>
                    <input class="form-control input100" type="date" name="borrowdate" placeholder="Borrowdate" ?>
                    <label for="email">Expired Return Date</label>
                    <input class="form-control input100" type="date" name="expreturndate" placeholder="Expreturndate" ?>
                    <label for="phone">Return date</label>
                    <input class="form-control input100" type="date" name="returndate" placeholder="Return Date" value="" ?>
                </div>
                <input type="submit" name="save" value="save" class="form-control btn btn-info">
            </form>
        </div>
    </section>
</div>

<?php $this->load->view("template/footer.php") ?>