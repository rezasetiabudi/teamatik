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
                    <label for="name">Name</label>
                    <input class="form-control input100" type="text" name="product_name" placeholder="Name" ?>
                    <label for="email">Price</label>
                    <input class="form-control input100" type="number" name="price" placeholder="Price" ?>
                    <label for="email">Residu value</label>
                    <input class="form-control input100" type="number" name="residu" placeholder="Residu" ?>
                    <label for="email">Quantity</label>
                    <input class="form-control input100" type="number" name="quantity" placeholder="Quantity" ?>
                    <label for="phone">Purchase date</label>
                    <input class="form-control input100" type="date" name="purchase_date" placeholder="Purchasing Date" ?>
                    <label for="position">Category</label>
                    <select class="form-control" name="category_id">
                        <option>--SELECT CATEGORY--</option>
                        <?php
                        $count = count($category);
                        for ($i = 0; $i < $count; $i++) {
                            echo '<option value="' . $category[$i]['id_category'] . '">' . $category[$i]['category_name'] . '</option>';
                        }
                        ?>
                    </select>
                    <!-- <label for="status">Status</label>
                <select class="form-control" name="status">
                    <option>--SELECT STATUS--</option>
                    <option value="0">Unavailable</option>
                    <option value="1">Available</option>
                </select> -->
                    <label for="position">Supplier</label>
                    <select class="form-control" name="supplier">
                        <option>--SELECT SUPPLIER--</option>
                        <?php
                        $count = count($supplier);
                        for ($j = 0; $j < $count; $j++) {
                            echo '<option value="' . $supplier[$j]['id_supplier'] . '">' . $supplier[$j]['supplier_name'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="box-footer">
                    <a href="<?php echo base_url('Product/index') ?>" class="btn btn-default"><span class="glyphicon glyphicon-menu-left"></span> Back</a>
                    <div class="pull-right">
                        <button type="submit" value="save" name="save" class="btn btn-success">Save&nbsp <span class="glyphicon glyphicon-floppy-disk"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<?php $this->load->view("template/footer.php") ?>