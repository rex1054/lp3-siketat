<!DOCTYPE html>
<html lang="en">
<?php include('../config.php');?>
<head>
<title>LP3 - CAPAIAN RPS TAHUN AKADEMIK <?php echo $_GET['t']; ?></title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="../assets/logo.jpg">
<link rel="stylesheet" type="text/css" href="../assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/lp3-main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<script src="../assets/jquery.min.js"></script>
<script src="../assets/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<link rel="stylesheet" href="../assets/dashboard.css">
<link rel="stylesheet" href="../assets/dashboard-print.css">

</head>

<body>
<div class="container">

<!-- start header section -->
<div class="row header-section">
<div class="col-md-1">
<img class="header-logo logo-left" src="../assets/logo.jpg">
</div>
<div class="col-md-10 header-lp3">
<h3>UNIVERSITAS MUHAMMADIYAH JEMBER</h3>
<h4>LEMBAGA PENGKAJIAN DAN PENGEMBANGAN PENDIDIKAN (LP3)</h4>
<h4>SISTEM KELOLA TANDA TERIMA (SIKETAT)</h4>
<h4>Versi <?php echo $appver; ?></h4>
<h4>© <a href="https://s.id/soj-firdaus" target="_blank">Ahmad Firdaus Ababil</a> @<?php echo $rights; ?> | <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> powered</h4>
</div>
<div class="col-md-1">
<img class="header-logo logo-right" src="../assets/iso.jpg">
</div>
</div>
<!-- end header section -->

<!-- start navigasi -->
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="list-tab" onclick="nav('list')" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="true">Docs</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="dosen-tab" onclick="nav('dosen')" data-bs-toggle="tab" data-bs-target="#dosen" type="button" role="tab" aria-controls="dosen" aria-selected="true">Dosen</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="add-tab" onclick="nav('add')" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab" aria-controls="add" aria-selected="false">Add</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="about-tab" onclick="nav('about')" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
</li>
</ul>
<!-- end navigasi -->

<!-- start content -->
<main class="col-sm-12 col-md-12 col-lg-12">
<div class="dash-title d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Dashboard</h1>
<div class="btn-toolbar mb-2 mb-md-0">
<div class="btn-group me-2">
<button type="button" onclick="printFunc()" class="btn btn-sm btn-outline-secondary">Cetak</button>
</div>
<select class="btn btn-sm btn-outline-secondary dropdown-toggle" onchange="dashboard(this.value, this.options[this.selectedIndex].text)">
<option value="<?php $_GET['ta']; ?>" selected disabled><?php echo $_GET['t'];?></option>
<?php include('../get/get.ta.php'); ?>
</select>
</div>
</div>

<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Grafik Capaian RPS Tahun Akademik <?php echo $_GET['t']; ?> (dalam %)</h2>
</div>
<canvas class="my-4 w-100" id="myChart"></canvas>

<div class="dosen-container">
<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Dosen Dengan Dokumen Terbanyak</h2>
</div>
<div class="table-responsive">
<?php include('../get/get.dashboard.rank.php'); ?>
</div>
</div>

<div class="table-container">
<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Tabel Capaian RPS Tahun Akademik <?php echo $_GET['t']; ?></h2>
</div>
<div class="table-responsive">
<table class="table table-striped table-hover" id="dashboard-table">
<thead>
<tr>
<th class="text-center" scope="col">No.</th>
<th scope="col">Program Studi</th>
<th class="text-center" scope="col">MK Non-MKWU</th>
<th class="text-center" scope="col">RPS Non-MKWU</th>
<th class="text-center" scope="col">Capaian</th>
</tr>
</thead>
<tbody>
<?php
$_GET['aka'] = $_GET['ta'];
include('../get/get.dashboard.table.php');
?>
</tbody>
</table>
</div>
</div>
</main>
<!-- end content -->
</div>

<script src="../assets/bootstrap.min.js"></script>
<script src="../assets/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<script src="../assets/lp3.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="../assets/chartjs-plugin-annotation.js"></script>
<div id="chartz">
<?php 
$_GET['aka'] = $_GET['ta'];
include('../get/get.chart.php'); 
?>
</div>
<script>
  $(document).ready(function(){
    sortTable('dashboard-table',4);
    (function() {
      var a = document.getElementById("dashboard-table").querySelectorAll(".ranked");
    for(var b = 0; b < 28; b++){
      a[b].innerHTML = b+1;
    }
    })()
  });
  </script>
<script>
  $(document).ready(function(){
    (function() {
      var a = document.getElementById("tabel-rank").querySelectorAll(".ranked");
    for(var b = 0; b < 5; b++){
      a[b].innerHTML = b+1;
    }
    })()
  });
  </script>

</body>

</html>