<?php
session_start();
session_destroy();
require_once('../../master.php')
?>
<script>window.open('<?php echo $siteurl; ?>', '_self');</script>