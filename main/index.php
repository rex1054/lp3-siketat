<!DOCTYPE html>
<html lang="en">
<?php include('../config.php');?>
<head>
<title>LP3 - SIKETAT</title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="<?php echo $siteurl; ?>assets/logo.jpg">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $siteurl; ?>assets/select2.min.css"/>
<link rel="stylesheet" href="<?php echo $siteurl; ?>assets/dashboard.css">
<link rel="stylesheet" type="text/css"
href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/fh-3.2.3/r-2.3.0/sc-2.0.6/datatables.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/lp3-main.css">

</head>

<body>
<div class="container">

<!-- start header section -->
<div class="row header-section">
<div class="col-md-1">
<img class="header-logo logo-left" src="<?php echo $siteurl; ?>assets/logo.jpg">
</div>
<div class="col-md-10 header-lp3">
<h3>UNIVERSITAS MUHAMMADIYAH JEMBER</h3>
<h4>LEMBAGA PENGKAJIAN DAN PENGEMBANGAN PENDIDIKAN (LP3)</h4>
<h4>SISTEM KELOLA TANDA TERIMA (SIKETAT)</h4>
<h4>Versi <?php echo $appver; ?></h4>
<h4>© <a href="https://s.id/soj-firdaus" target="_blank">Ahmad Firdaus Ababil</a> @<?php echo $rights; ?> | <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> powered</h4>
</div>
<div class="col-md-1">
<img class="header-logo logo-right" src="<?php echo $siteurl; ?>assets/iso.jpg">
</div>
</div>
<!-- end header section -->

<!-- start navigasi -->
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link" id="dashboard-tab" onclick="dashboard(<?php echo COUNT($akademik);?>, '<?php echo $akademik[COUNT($akademik)-1]; ?>')" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link <?php if(isset($_GET['to'])){ if($_GET['to']=='list'){ echo 'active';} } else { echo 'active'; } ?>" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="true">Docs</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link <?php if(isset($_GET['to'])){ if($_GET['to']=='add'){ echo 'active';} } ?>" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab" aria-controls="add" aria-selected="false">Add</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link <?php if(isset($_GET['to'])){ if($_GET['to']=='dosen'){ echo 'active';} }?>" id="dosen-tab" data-bs-toggle="tab" data-bs-target="#dosen" type="button" role="tab" aria-controls="dosen" aria-selected="true">Dosen</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="fakultas-tab" onclick="fakultas()" data-bs-toggle="tab" data-bs-target="#fakultas" type="button" role="tab" aria-controls="fakultas" aria-selected="true">Fakultas</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link <?php if(isset($_GET['to'])){ if($_GET['to']=='about'){ echo 'active';} } ?>" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" onclick="master(1)" id="master-tab" data-bs-toggle="tab" data-bs-target="#master" type="button" role="tab" aria-controls="master" aria-selected="false">MASTER</button>
</li>
</ul>
<!-- end navigasi -->

<!-- start content -->
<div class="tab-content col-sm-12 col-md-12 col-lg-12 col-xl-12" id="myTabContent">
<div class="tab-pane fade <?php if(isset($_GET['to'])){ if($_GET['to']=='list'){ echo 'show active';} } else { echo 'show active'; } ?>" id="list" role="tabpanel" aria-labelledby="list-tab"><?php include("../list/index.php") ?></div>
<div class="tab-pane fade <?php if(isset($_GET['to'])){ if($_GET['to']=='dosen'){ echo 'show active';} }?>" id="dosen" role="tabpanel" aria-labelledby="dosen-tab"><?php include("../dosen/index.php") ?></div>
<div class="tab-pane fade <?php if(isset($_GET['to'])){ if($_GET['to']=='add'){ echo 'show active';} } ?>" id="add" role="tabpanel" aria-labelledby="add-tab"><?php include("../add-dokumen/index.php") ?></div>
<div class="tab-pane fade <?php if(isset($_GET['to'])){ if($_GET['to']=='about'){ echo 'show active';} } ?>" id="about" role="tabpanel" aria-labelledby="about-tab"><?php include("../about/index.html") ?></div>
</div>
<!-- end content -->
</div>

<script src="<?php echo $siteurl; ?>assets/jquery.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/bootstrap.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/chartjs-plugin-annotation.js"></script>
<script type="text/javascript" src="<?php echo $siteurl; ?>assets/DataTables/datatables.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/lp3-pagination.js"></script>
<script src="<?php echo $siteurl; ?>assets/lp3.js"></script>
</body>

</html>