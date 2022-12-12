<!DOCTYPE html>
<html lang="en">
<?php include('../../master.php'); ?>
<head>
<title>LP3 - SIKETAT</title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="<?php echo $siteurl; ?>assets/img/logo.jpg">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/lp3-main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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

<form action="add.php" method="POST" enctype="multipart/form-data">
<!-- start nama section -->
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama Dosen" aria-describedby="nama">
  </div>
<!-- end nama section -->

<!-- start NPK / NIP section -->
<div class="mb-3">
    <label for="npk" class="form-label">NIDN / NIP</label>
    <input type="text" class="form-control" id="npk" name="npk" placeholder="NIDN / NIP" aria-describedby="nidn / nip">
  </div>
<!-- end NPK / NIP section -->

<!-- start submit button -->
<button type="submit" class="btn btn-primary">Simpan</button>
<a class="btn btn-danger" href="<?php echo $siteurl; ?>" target="_self">Kembali</a>
<!-- end submit button -->
</form>
<!-- end content -->

<script src="<?php echo $siteurl; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/lp3.js"></script>
</body>

</html>