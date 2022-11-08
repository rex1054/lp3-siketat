<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php include('../config.php'); ?>
<?php include('../master.php'); ?>
<head>
<title>LP3 - SIKETAT</title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="<?php echo $siteurl; ?>assets/logo.jpg">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/lp3-main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<script src="<?php echo $siteurl; ?>assets/jquery.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/bootstrap.min.js"></script>
</head>

<!-- get data script -->
<?php
$sql = "SELECT * FROM ta WHERE id_ta = ".$_GET['ta'];
$tableSQL = 'SELECT mk.id, mk.id_ta, ta.ta, mk.id_prodi, prodi.prodi, mk.jumlah_mk from mk join ta on mk.id_ta = ta.id_ta join prodi on mk.id_prodi = prodi.id_prodi where prodi.primer = 1 AND mk.id_ta = '.$_GET['ta'];
$prodiSQL = "SELECT `id_prodi`, `prodi` FROM `prodi` WHERE `primer` = 1";

$ta = $con->query($sql)->fetch_assoc();
$tableQuery = $con->query($tableSQL);
?>
<!-- get data script -->

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

<!-- start main content -->
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; text-decoration: underline;">MASTER</h2><br/>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
<form action="<?php echo $siteurl; ?>prodi/" method="GET">
<select class="form-select" id="ta" name="ta" onchange="master(this.value)" required aria-label="pilih tahun akademik">
<option selected disabled value=""><?php if(isset($_GET['ta'])){ echo $ta['ta'];} else {echo 'Pilih Tahun Akademik';} ?></option>
<?php
include('../get/get.ta.php');
?>
</select>
</form>
</div>
</div>
<div class="row">
    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 justify-content-center">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah TA
</button>
    </div>
    <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
</div>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center">
<table id="tabel-mk" class="table table-striped table-hover">
<thead>
<tr>
<th>No.</th>
<th>Tahun Akademik</th>
<th>Perogram Studi</th>
<th>Jumlah MK</th>
</tr>
</thead>
<tbody>
<?php
if($tableQuery->num_rows != 0) {
    $x=1;
    while($table = mysqli_fetch_array($tableQuery)){
        ?>
        <tr>
        <td><?php echo $x; ?></td>
        <td><?php echo $table['ta']; ?></td>
        <td><?php echo $table['prodi']; ?></td>
        <td>
        <form action="update.php" style="margin:0" method="POST" enctype="multipart/form-data">
        <input type="text" name="id" value="<?php echo $table['id']; ?>" hidden>
        <input type="number" name="jumlah-mk" id="jumlah-mk" required value="<?php echo $table['jumlah_mk']; ?>">
        <input type="text" name="ta" value="<?php echo $_GET['ta']; ?>" hidden>
        <button type="submit" class="btn btn-success">Perbarui</button>
        </form>
        </td>
        </tr>
        <?php
        $x++;
    }
} else {
    ?>
    <script>window.open('zero.php?ta=<?php echo $_GET['ta']; ?>', '_SELF');</script>
    <?php
}
?>
</tbody>
</table>
<div class="w-100 text-center">
<br/>
<a class="btn btn-danger" href="<?php echo $siteurl; ?>" target="_self">Kembali</a>
</div>
</div>
</div>
</div>
<!-- end main content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <form action="add.php" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Tahun Akademik</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <div class="row mb-3">
    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
      <select type="year" name="tahun" class="form-control" id="yearpicker"></select>
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Semester</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="semester" id="semester1" value="Ganjil" checked>
        <label class="form-check-label" for="semester1">
          Ganjil
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="semester" id="semester2" value="Genap">
        <label class="form-check-label" for="semester2">
          Genap
        </label>
      </div>
    </div>
  </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo $siteurl; ?>assets/bootstrap.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/lp3.js"></script>
<script>
  getYear(<?php echo date('Y');?>);
</script>
</body>

</html>