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
                    <label for="name"> Name</label>
                    <input class="form-control input100" type="text" name="name" placeholder="Name" ?>
                    <label for="department">Department</label>
                    <select class="form-control" name="department" id="department">
                        <option>-Select Kategori-</option>
                        <?php
                        $count = count($department);
                        for ($i = 0; $i < $count; $i++) {
                            echo '<option value="' . $department[$i][id_department] . '">' . $department[$i][department_name] . '</option>';
                        }
                        ?>
                    </select>
                    <p id="multiple_value"></p>
                    <div id="depts">

                    </div>
                    <input class="form-control input100" type="hidden" name="penampung" placeholder="penampung" id="penampung" ?>
                    <p id="validation" style="color:red"></p>
                </div>
                <div class="box-footer">
                    <a href="<?php echo base_url('Position/index') ?>" class="btn btn-default"><span class="glyphicon glyphicon-menu-left"></span> Back</a>
                    <div class="pull-right">
                        <button type="submit" value="save" name="save" class="btn btn-success">Save&nbsp <span class="glyphicon glyphicon-floppy-disk"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    var arrTitle = [];
    var arrId = [];
    $(function() {
        $('#department').change(function() {
            var selectedText = $("#department option:selected").html();
            var selectedId = document.getElementById("department").value;

            if (arrId.includes(selectedId)) {
                document.getElementById("validation").innerHTML = "sudah ada"
            } else {
                document.getElementById("validation").innerHTML = ""
                arrTitle.push(selectedText);
                arrId.push(selectedId);
            }

            document.getElementById("penampung").value = arrId;
            document.getElementById("depts").innerHTML = arrTitle;
        });
    });
</script>
<?php $this->load->view("template/footer.php") ?>