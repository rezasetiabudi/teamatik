<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
    <div class="form-group">
        <form method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            Phone: <input type="text" name="phone"><br>
            <select class = "form-control" name="position">
            <?php
                $count = count($posisi);
                for($i = 0; $i<$count; $i++){
                    echo '<option value="'.$posisi[$i][id].'">'.$posisi[$i][name].'</option>';
                }
            ?>
            </select>
            <input type="submit" name="save" value="save">
        </form>
    </div>

    <a href = "<?php echo base_url()?>">BACK</a>
</html>