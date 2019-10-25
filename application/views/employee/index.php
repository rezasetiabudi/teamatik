<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    
<?php endforeach; ?>

<!-- Main content -->
<section class="content">
    <div class="container">
        <?php echo $output?>
    </div>
</section>
<!-- /.content -->