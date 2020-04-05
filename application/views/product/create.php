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
                <label for="name">Name</label>
                <input class="form-control input100" type="text" name="name" placeholder="Name" ?>
                <label for="email">Price</label>
                <input class="form-control input100" type="text" name="price" placeholder="Price" ?>
                <label for="email">Quantity</label>
                <input class="form-control input100" type="number" name="qty" placeholder="Quantity" ?>
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
                <label for="status">Supplier</label>
                <select class="form-control" name="supplier">
                    <option>--SELECT SUPPLIER--</option>
                    <?php
                    $count = count($supplier);
                    echo $count;
                    for ($i = 0; $i < $count; $i++) {
                        echo '<option value="' . $supplier[$i]['id_supplier'] . '">' . $supplier[$i]['supplier_name'] . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="save" value="save" class="form-control btn btn-info">
            </form>
        </div>
    </section>
</div>

<?php $this->load->view("template/footer.php") ?>
