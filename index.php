<?php
session_start();
require_once('config.php');
if(isset($_SESSION['name'])){
?>
<script>window.open('<?php echo $siteurl; ?>admin/', '_self')</script>
<?php
} else {
    ?>
    <script>window.open('<?php echo $siteurl; ?>landing/', '_self')</script>
    <?php
}
?>