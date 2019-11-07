<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/sidebar.php") ?>



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
                <input class="form-control input100" type="text" name="name" placeholder="Name" value = "<?php echo $name?>"?>
                <label for="email">Price</label>
                <input class="form-control input100" type="text" name="price" placeholder="Price" value = "<?php echo $price?>"?>
                <label for="phone">Purchase date</label>
                <input class="form-control input100" type="date" name="purchase_date" placeholder="Purchasing Date" value = "<?php echo $purchase_date?>"?>
                <label for="position">Category</label>
                <select class="form-control" name="category_id">
                <option>--SELECT CATEGORY--</option>
                    <?php
                    $count = count($category);
                    for ($i = 0; $i < $count; $i++) {
                        if($category_id == $category[$i]['id']){
                            echo '<option selected value="' . $category[$i]['id'] . '">' . $category[$i][name] . '</option>';
                        }
                        else {
                            echo '<option value="' . $category[$i]['id'] . '">' . $category[$i][name] . '</option>';
                        }
                    }
                    ?>
                </select>
                <label for="status">Status</label>
                <select class="form-control" name="status">
                    <option>--SELECT STATUS--</option>
                    <?php if($status == 0){?>
                        <option selected value="0">Unavailable</option>
                        <option value="1">Available</option>
                    <?php } else {?>
                        <option value="0">Unavailable</option>
                        <option selected value="1">Available</option>
                    <?php }?>
                </select>
                <input type="submit" name="save" value="save" class="form-control btn btn-info">
            </form>
        </div>
    </section>
</div>

<?php $this->load->view("template/footer.php") ?>