<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
    <form method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Phone: <input type="text" name="phone"><br>
        Position: <input type="text" name="position"><br>
        <input type="submit" name="save" value="save">
    </form>

    <a href = "<?php echo base_url()?>">BACK</a>
</html>