<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('../master.php');
if(!isset($_SESSION['name'])){
    header('location:' . $siteurl);
}

if(!isset($_GET['t'])){
    $sql = 'SELECT * FROM ta ORDER BY id_ta DESC LIMIT 1';
    $getta = $con->query($sql);
    if($getta){
        $data = $getta->fetch_assoc();
        $_GET['t'] = $data['ta'];
        $_GET['ta'] = $data['id_ta'];
    }
}
?>
<head>
<title>LP3 - SIKETAT</title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="<?php echo $siteurl; ?>assets/img/logo.jpg">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/DataTables/datatables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/lp3-main.css">
<link rel="stylesheet" href="<?php echo $siteurl; ?>assets/css/dashboard.css">
<link rel="stylesheet" href="<?php echo $siteurl; ?>assets/css/dashboard-print.css">

</head>

<body>
<div class="container">

<!-- start header section -->
<div class="row header-section">
<div class="col-md-1">
<img class="header-logo logo-left" src="<?php echo $siteurl; ?>assets/img/logo.jpg">
</div>
<div class="col-md-10 header-lp3">
<h3>UNIVERSITAS MUHAMMADIYAH JEMBER</h3>
<h4>LEMBAGA PENGKAJIAN DAN PENGEMBANGAN PENDIDIKAN (LP3)</h4>
<h4>SISTEM KELOLA TANDA TERIMA (SIKETAT)</h4>
<h4>Versi <?php echo $appver; ?></h4>
<h4>© <a href="<?php echo $authorlink; ?>" target="_blank">Ahmad Firdaus Ababil</a> @<?php echo $rights; ?> | <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> & <a href="https://soj.my.id/" target="_blank">SOJ</a> powered</h4>
</div>
<div class="col-md-1">
<img class="header-logo logo-right" src="<?php echo $siteurl; ?>assets/img/iso.jpg">
</div>
</div>
<!-- end header section -->

<!-- start navigasi -->
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="list-tab" onclick="retable()" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">Docs</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab" aria-controls="add" aria-selected="false">Add</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="dosen-tab" onclick="retable()" data-bs-toggle="tab" data-bs-target="#dosen" type="button" role="tab" aria-controls="dosen" aria-selected="false">Dosen</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="fakultass-tab" data-bs-toggle="tab" data-bs-target="#fakultass" type="button" role="tab" aria-controls="fakultass" aria-selected="false">Fakultas</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="master-tab" data-bs-toggle="tab" data-bs-target="#master" type="button" role="tab" aria-controls="master" aria-selected="false">MASTER</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link bg-danger text-light" id="logout-tab" data-bs-toggle="tab" data-bs-target="#logout" type="button" role="tab" aria-controls="logout" onclick="logout()" aria-selected="false">Logout</button>
</li>
</ul>
<!-- end navigasi -->

<!-- start content -->
<div class="row" style="margin-top: 15px !important;">
<div class="col-12">
<div class="tab-content col-sm-12 col-md-12 col-lg-12 col-xl-12" id="myTabContent">
<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab"><?php include("dashboard/index.php"); ?></div>
<div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab"><?php include("list/index.php"); ?></div>
<div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab"><?php include("add-dokumen/index.php"); ?></div>
<div class="tab-pane fade" id="dosen" role="tabpanel" aria-labelledby="dosen-tab"><?php include("dosen/index.php"); ?></div>
<div class="tab-pane fade" id="fakultass" role="tabpanel" aria-labelledby="fakultass-tab"><?php include("fakultas/index.php"); ?></div>
<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab"><?php include("../landing/about.html"); ?></div>
<div class="tab-pane fade" id="master" role="tabpanel" aria-labelledby="master-tab"><?php include("master/index.php"); ?></div>
</div>
</div>
</div>
<!-- end content -->
</div>

<script src="<?php echo $siteurl; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/DataTables/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.umd.js" integrity="sha512-gQhCDsnnnUfaRzD8k1L5llCCV6O9HN09zClIzzeJ8OJ9MpGmIlCxm+pdCkqTwqJ4JcjbojFr79rl2F1mzcoLMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo $siteurl; ?>assets/js/annotation.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/select2.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/lp3.js"></script>
<div id="chartz">
<?php 
$_GET['aka'] = $_GET['ta'];
include('../get/get.chart.php'); 
?>
</div>
</body>

</html>