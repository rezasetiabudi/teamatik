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
                    <input class="form-control input100" type="text" name="name" placeholder="Name" value="<?php echo $name ?>" ?>
                    <label for="email">Price</label>
                    <input class="form-control input100" type="number" name="price" placeholder="Price" value="">
                    <label for="email">Residu value</label>
                    <input class="form-control input100" type="number" name="residu" placeholder="Residu" ?>
                    <label for="email">Quantity</label>
                    <input class="form-control input100" type="number" name="quantity" placeholder="Quantity" value="" ?>
                    <label for="phone">Purchase date</label>
                    <input class="form-control input100" type="date" name="purchase_date" placeholder="Purchasing Date" value="" ?>
                    <label for="position">Category</label>
                    <select class="form-control" name="category">
                        <option>--SELECT Category--</option>
                        <?php
                        $count = count($category);
                        for ($j = 0; $j < $count; $j++) {
                            echo '<option value="' . $category[$j]['id_category'] . '">' . $category[$j]['category_name'] . '</option>';
                        }
                        ?>
                    </select>
                    <label for="position">Supplier</label>
                    <select class="form-control" name="supplier">
                        <option>--SELECT Supplier--</option>
                        <?php
                        $count = count($supplier);
                        for ($i = 0; $i < $count; $i++) {
                            echo '<option value="' . $supplier[$i]['id_supplier'] . '">' . $supplier[$i]['supplier_name'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <input type="submit" name="save" value="save" class="form-control btn btn-info">
            </form>
        </div>
    </section>
</div>

<?php $this->load->view("template/footer.php") ?>