<main class="col-sm-12 col-md-12 col-lg-12">
<div class="dash-title d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Dashboard</h1>
<div class="btn-toolbar mb-2 mb-md-0">
<div class="btn-group me-2">
<button type="button" onclick="dashPrint('<?php echo $_GET['t']; ?>', <?php echo $_GET['ta']; ?>)" class="btn btn-sm btn-outline-secondary">Cetak</button>
</div>
<select class="btn btn-sm btn-outline-secondary dropdown-toggle" onchange="dashboard('general', this.value, this.options[this.selectedIndex].text)">
<option value="<?php $_GET['ta']; ?>" selected disabled><?php echo $_GET['t'];?></option>
<?php include('../get/get.ta.php'); ?>
</select>
</div>
</div>
<h3>Data per tanggal <?php echo date_format(date_create('now'), 'd-m-Y'); ?></h3>
<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Grafik Capaian RPS Tahun Akademik <?php echo $_GET['t']; ?> (dalam %)</h2>
</div>
<canvas class="my-4 w-100" id="grafik"></canvas>

<div class="dosen-container">
<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Dosen Dengan Dokumen Terbanyak Tahun Akademik <?php echo $_GET['t']; ?></h2>
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