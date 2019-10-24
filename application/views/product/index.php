<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <?php $this->load->view("template/sidenavbar.php") ?>

        <main class="main">
            <div class="container">
                <a href="<?php echo base_url() ?>" class="backButton btn btn-danger">BACK</a>
                <h2>Product</h2>
                <a href="<?php echo base_url() ?>Product/create" class="addButton btn btn-primary">Add</a>

                <div class="table-responsive">
                <table  id="example" class="table table-striped table-bordered" style="width:100%">
                        <th>#</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Purchase Year</th>
                        <th>Price</th>
                        <th>Action</th> -->
                        
                        <?php 
                            $count = count($product);
                            for($i = 0; $i<$count; $i++){
                                $x = $i + 1;
                                echo '<tr>';
                                echo '<td>'.$x.'</td>';
                                echo '<td>'.$product[$i]["name"].'</td>';
                                echo '<td>'.$product[$i]["category_id"].'</td>';
                                echo '<td>'.$product[$i]["purchase_year"].'</td>';
                                echo '<td> Rp. '.number_format($product[$i]["price"]).'</td>';
                                echo '</tr>';
                            }
                        ?>
                    <!-- </table> -->
                </div>
            </div>
        </main>
        <footer class="footer">
            <p><span class="footer__copyright">&copy;</span> 2019 Teamatik</p>
        </footer>
</div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
    <script src='https://www.amcharts.com/lib/3/amcharts.js'></script>
    <script src='https://www.amcharts.com/lib/3/serial.js'></script>
    <script src='https://www.amcharts.com/lib/3/themes/light.js'></script>
    <script src="<?php echo base_url() ?>/assets/script.js"></script>

</body>
</html>
