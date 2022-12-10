<!DOCTYPE html>
<html lang="en">
<?php include('../../../master.php');?>
<head>
<title>LP3 - Detail Fakultas</title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="<?php echo $siteurl; ?>assets/img/logo.jpg">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/lp3-main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

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
<h4>© <a href="https://s.id/soj-firdaus" target="_blank">Ahmad Firdaus Ababil</a> @<?php echo $rights; ?> | <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> powered</h4>
</div>
<div class="col-md-1">
<img class="header-logo logo-right" src="<?php echo $siteurl; ?>assets/img/iso.jpg">
</div>
</div>
<!-- end header section -->

<!-- start content -->
<main class="col-sm-12 col-md-12 col-lg-12"><br/>

<div class="table-container">
<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Daftar Program Studi</h2>
</div>
<div class="table-responsive">
<table class="table table-striped table-hover" id="dashboard-table">
<thead>
<tr>
<th class="text-center" scope="col">No.</th>
<th scope="col">Fakultas</th>
<th scope="col">Program Studi</th>
<th scope="col">Email</th>
<th class="text-center" scope="col">Aksi</th>
</tr>
</thead>
<tbody>
<?php
include('../../../get/get.prodi.table.php');
?>
</tbody>
</table>
<button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#add-modal">Tambah Program Studi</button>
<button class="btn btn-outline-danger" onclick="admin()">Kembali</button>
</div>

<div class="modal fade" id="add-modal">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Tambah Program Studi</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
<form action="add.php" method="POST" enctype="multipart/form-data">
<input name="id-fakultas" id="id-fakultas" value="<?php echo $_GET['id']; ?>" hidden>
<label for="nama-prodi" class="form-label">Nama Program Studi</label>
<input type="text" class="form-control" id="nama-prodi" name="nama-prodi" required placeholder="Nama prodi (contoh: ILMU KEPERAWATAN)" aria-describedby="nama-prodi"><br/>
<label for="email-prodi" class="form-label">Email Program Studi</label>
<input type="email" class="form-control" id="email-prodi" name="email-prodi" placeholder="Email prodi (contoh: s1.fikes@unmuhjember.ac.id)" aria-describedby="email-prodi"><br/>
<input type="checkbox" id="primer" name="primer" value="1">
<label for="primer"> Primer</label><br>
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
</div>

</div>
</div>
</div>

<div class="modal fade" id="edit-modal">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Ubah Program Studi</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
<form action="edit.php" method="POST" enctype="multipart/form-data">
<input name="id-fakultas" id="id-fakultas" value="<?php echo $_GET['id']; ?>" hidden>
<input type="text" id="id-prodi" name="id-prodi" hidden>
<label for="nama-prodi" class="form-label">Nama Program Studi</label>
<input type="text" class="form-control" id="edit-nama-prodi" name="edit-nama-prodi" required placeholder="Nama prodi (contoh: Ilmu Keperawatan)" aria-describedby="nama-prodi"><br/>
<label for="email-prodi" class="form-label">Email Program Studi</label>
<input type="email" class="form-control" id="edit-email-prodi" name="edit-email-prodi" placeholder="Email prodi (contoh: s1.fikes@unmuhjember.ac.id)" aria-describedby="email-prodi">
<input type="checkbox" id="edit-primer" name="edit-primer" value="1">
<label for="edit-primer"> Primer</label><br>
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
</div>

</div>
</div>
</div>
</div>
</main>
</div>

<script src="<?php echo $siteurl; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/lp3.js"></script>


</body>

</html>