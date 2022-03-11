<!DOCTYPE html>
<html lang="en">
<?php include('../config.php'); ?>
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

<form action="add.php" method="POST" enctype="multipart/form-data">
<!-- start nama section -->
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama Dosen" aria-describedby="nama">
  </div>
<!-- end nama section -->

<!-- start NPK / NIP section -->
<div class="mb-3">
    <label for="npk" class="form-label">NPK / NIP</label>
    <input type="text" class="form-control" id="npk" name="npk" placeholder="NPK / NIP" aria-describedby="npk / nip">
  </div>
<!-- end NPK / NIP section -->

<!-- start submit button -->
<button type="submit" class="btn btn-primary">Simpan</button>
<a class="btn btn-danger" href="<?php echo $siteurl; ?>" target="_self">Kembali</a>
<!-- end submit button -->
</form>
<!-- end content -->

<script src="<?php echo $siteurl; ?>assets/bootstrap.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/lp3.js"></script>
</body>

</html>