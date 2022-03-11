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
<button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="true">Dokumen</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="dosen-tab" data-bs-toggle="tab" data-bs-target="#dosen" type="button" role="tab" aria-controls="dosen" aria-selected="true">Dosen</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab" aria-controls="add" aria-selected="false">Add</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
</li>
</ul>
<!-- end navigasi -->

<!-- start content -->
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab"><?php include("dashboard/index.html") ?></div>
<div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab"><?php include("list/index.php") ?></div>
<div class="tab-pane fade" id="dosen" role="tabpanel" aria-labelledby="dosen-tab"><?php include("dosen/index.php") ?></div>
<div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab"><?php include("add-dokumen/index.php") ?></div>
<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab"><?php include("about/index.html") ?></div>
</div>
<!-- end content -->
</div>

<script src="assets/bootstrap.min.js"></script>
<script src="assets/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<script src="assets/lp3.js"></script>
<script>
$(document).ready(function () {
  $('#penyusun').selectize({
    sortField: 'text'
  });
  
});
</script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script>
(function() {
  'use strict'
  
  feather.replace({ 'aria-hidden': 'true' })
  
  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Hukum',
        'FKIP',
        'Pertanian',
        'Ekonomi',
        'FISIP',
        'Teknik',
        'Psikologi',
        'Fikes',
        'FAI'
      ],
      datasets: [
        {
        label: 'Rata-rata RPS',
        data: [
          <?php 
          $_GET['act']='rerata';
          for($i = 0; $i < 9; $i++){
            $_GET['jenis']='0';
            include('get/get.data.php');
            if($i == 9) {}
            else{
              echo ',';
            }
          } ?>
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#d64242',
        borderDash: [10],
        borderWidth: 4,
        pointBackgroundColor: '#d64242'
      }, {
        label: 'RPS',
        data: [
          <?php 
          $_GET['act']='fakultas';
          for($i = 0; $i < 9; $i++){
            $_GET['id_fak']=$i;
            $_GET['jenis']='0';
            include('get/get.data.php');
            if($i == 9) {}
            else{
              echo ',';
            }
          } ?>
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }, {
        label: 'Modul',
        data: [
          <?php 
          $_GET['act']='fakultas';
          for($i = 0; $i < 9; $i++){
            $_GET['id_fak']=$i;
            $_GET['jenis']='1';
            include('get/get.data.php');
            if($i == 9) {}
            else{
              echo ',';
            }
          } ?>
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#91d138',
        borderWidth: 4,
        pointBackgroundColor: '#91d138'
      }, {
        label: 'Buku Ajar',
        data: [
          <?php 
          $_GET['act']='fakultas';
          for($i = 0; $i < 9; $i++){
            $_GET['id_fak']=$i;
            $_GET['jenis']='2';
            include('get/get.data.php');
            if($i == 9) {}
            else{
              echo ',';
            }
          } ?>
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#d26cd4',
        borderWidth: 4,
        pointBackgroundColor: '#d26cd4'
      }, {
        label: 'Pedoman',
        data: [
          <?php 
          $_GET['act']='fakultas';
          for($i = 0; $i < 9; $i++){
            $_GET['id_fak']=$i;
            $_GET['jenis']='3';
            include('get/get.data.php');
            if($i == 9) {}
            else{
              echo ',';
            }
          } ?>
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#e8d546',
        borderWidth: 4,
        pointBackgroundColor: '#e8d546'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      },
      legend: {
        display: true
      }
    }
  })
})()
</script>
</body>

</html>