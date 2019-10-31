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
        <label for="name">Position Name</label>
            <input class="form-control input100" type="text" name="name" placeholder="Name" ?>
            <label for="department">Department</label>
            <select class="form-control" name="department" id = "department">
                <option>-Select Department-</option>
                <?php
                $count = count($department);
                for ($i = 0; $i < $count; $i++) {
                    echo '<option value="' . $department[$i][id] . '">' . $department[$i][name] . '</option>';
                }
                ?>
            </select>
            <p id="multiple_value"></p>
            <div id = "depts">

            </div>
            <input class="form-control input100" type="hidden" name="penampung" placeholder="penampung" id="penampung" ?>

            <input type="submit" name="save" value="save" class="form-control btn btn-info">
        </form>
    </div>
    </section>
    </div>

    <script>
    var arrTitle = [];
    var arrId= [];
    $(function(){
        $('#department').change(function(){
            var selectedText = $("#department option:selected").html();
            var selectedId = document.getElementById("department").value;
            arrTitle.push(selectedText);
            arrId.push(selectedId);

            document.getElementById("penampung").value = arrId;
            // document.getElementById("multiple_value").innerHTML = arrTitle;
        });
    });
    </script>
<?php $this->load->view("template/footer.php") ?>
