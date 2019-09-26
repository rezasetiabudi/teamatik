<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>
<h1 class="enter">ADD PRODUCT</h1>

    <div class="form-group">
        <form method="post">
            Product Name: <input type="text" name="name"><br>
            <select class = "form-control" name="category_id">
            <?php
                $count = count($kategori);
                for($i = 0; $i<$count; $i++){
                    echo '<option value="'.$kategori[$i][id].'">'.$kategori[$i][name].'</option>';
                }
            ?>
            </select>
            Purchase Year: <input type="date" name="purchase"><br>
            Price : <input type="text" name="price"><br>
            <input type="submit" name="save" value="save">
        </form>
    </div>
    <a href = "<?php echo base_url()?>/Product/index">BACK</a>
</body>
</html>