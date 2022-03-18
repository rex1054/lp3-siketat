<!DOCTYPE html>
<html lang="en">
<?php include('config.php');?>
<head>
<title>LP3 - SIKETAT</title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="assets/logo.jpg">
<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/lp3-main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<script src="assets/jquery.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<link rel="stylesheet" href="assets/dashboard.css">

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

<!-- start navigasi -->
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link" id="dashboard-tab" onclick="dashboard(2, '<?php echo $akademik[1]; ?>')" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link <?php if(isset($_GET['to'])){ if($_GET['to']=='list'){ echo 'active';} } else { echo 'active'; } ?>" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="true">Docs</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link <?php if(isset($_GET['to'])){ if($_GET['to']=='dosen'){ echo 'active';} }?>" id="dosen-tab" data-bs-toggle="tab" data-bs-target="#dosen" type="button" role="tab" aria-controls="dosen" aria-selected="true">Dosen</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link <?php if(isset($_GET['to'])){ if($_GET['to']=='add'){ echo 'active';} } ?>" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab" aria-controls="add" aria-selected="false">Add</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link <?php if(isset($_GET['to'])){ if($_GET['to']=='about'){ echo 'active';} } ?>" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
</li>
</ul>
<!-- end navigasi -->

<!-- start content -->
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade <?php if(isset($_GET['to'])){ if($_GET['to']=='list'){ echo 'show active';} } else { echo 'show active'; } ?>" id="list" role="tabpanel" aria-labelledby="list-tab"><?php include("list/index.php") ?></div>
<div class="tab-pane fade <?php if(isset($_GET['to'])){ if($_GET['to']=='dosen'){ echo 'show active';} }?>" id="dosen" role="tabpanel" aria-labelledby="dosen-tab"><?php include("dosen/index.php") ?></div>
<div class="tab-pane fade <?php if(isset($_GET['to'])){ if($_GET['to']=='add'){ echo 'show active';} } ?>" id="add" role="tabpanel" aria-labelledby="add-tab"><?php include("add-dokumen/index.php") ?></div>
<div class="tab-pane fade <?php if(isset($_GET['to'])){ if($_GET['to']=='about'){ echo 'show active';} } ?>" id="about" role="tabpanel" aria-labelledby="about-tab"><?php include("about/index.html") ?></div>
</div>
<!-- end content -->
</div>

<script src="assets/bootstrap.min.js"></script>
<script src="assets/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<script src="assets/lp3.js"></script>
<script>
$(document).ready(function () {
  $('.lp3-penyusun').selectize({
    sortField: 'text'
  });
  
});
</script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="assets/chartjs-plugin-annotation.js"></script>
  
  </body>
  
  </html>