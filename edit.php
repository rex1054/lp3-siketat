<!DOCTYPE html>
<html lang="en">
<?php include('config.php'); ?>
<head>
<title>LP3 - SIKETAT</title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="assets/logo.jpg">
<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/lp3-main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<script src="assets/jquery.min.js"></script>
</head>

<body>
<div class="container">
<!-- start header section -->
<div class="row header-section">
<div class="col-md-1">
<img class="header-logo logo-left" src="assets/logo.jpg">
</div>
<div class="col-md-10 header-lp3">
<h3>UNIVERSITAS MUHAMMADIYAH JEMBER</h3>
<h4>LEMBAGA PENGKAJIAN DAN PENGEMBANGAN PENDIDIKAN (LP3)</h4>
<h4>SISTEM KELOLA TANDA TERIMA (SIKETAT)</h4>
<h4>Versi <?php echo $appver; ?></h4>
<h4>© <a href="https://s.id/soj-firdaus" target="_blank">Ahmad Firdaus Ababil</a> @<?php echo $rights; ?> | <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> powered</h4>
</div>
<div class="col-md-1">
<img class="header-logo logo-right" src="assets/iso.jpg">
</div>
</div>
<!-- end header section -->

<!-- start content -->
<?php
if($_GET['act'] == 'dokumen') {
    include('getData.php');
} else if ($_GET['act'] == 'dosen') {
    $_GET['id'] = $_GET['id'];
    include('getDos.php');
}
?>
<!-- end content -->

<script src="assets/bootstrap.min.js"></script>
<script src="assets/lp3.js"></script>
</body>

</html>