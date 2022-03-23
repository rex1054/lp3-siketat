<!DOCTYPE html>
<html lang="en">
<?php include('../../config.php'); ?>
<?php include('../../master.php'); ?>
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
$sql = "SELECT * FROM dosen WHERE id = ".$_GET['id'];
$query = $con->query($sql);
$data = $query->fetch_assoc();

$tableSQL = "SELECT dokumen.id, dokumen.mk, jenis.jenis, jenis.mkwu, ta.ta, prodi.prodi, dokumen.tanggal, dokumen.kode_mk FROM dokumen JOIN penyusun ON dokumen.id = penyusun.id_dokumen JOIN jenis ON dokumen.jenis = jenis.id_jenis JOIN ta ON dokumen.ta = ta.id_ta JOIN prodi ON dokumen.prodi = prodi.id_prodi WHERE penyusun.id_dosen = ".$_GET['id']." ORDER BY id DESC";
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
<h2 style="font-size: 16pt; text-decoration: underline;">Detail Dosen</h2><br/>
</div>
</div>
<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
<h3>ID</h3>
<h3>Nama</h3>
<h3>NIP/NIDN</h3>
<h3>Jumlah Dokumen</h3>
<a class="btn btn-success" href="<?php echo $siteurl; ?>edit/?act=dosen&id=<?php echo $_GET['id']; ?>">Ubah Data</a>
</div>
<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
<h3>: <?php echo $data['id'] ?></h3>
<h3>: <?php echo $data['nama'] ?></h3>
<h3>: <?php echo $data['npk'] ?></h3>
<h3>: <?php echo $tableQuery->num_rows; ?></h3>
</div>
</div><br/>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center">
<table id="tabel-dokumen" class="table table-striped table-hover">
<thead>
<tr>
<th>ID</th>
<th>Jenis</th>
<th>MKWU/Non-MKWU</th>
<th>TA</th>
<th>Matakuliah</th>
<th>Kode MK</th>
<th>Program Studi</th>
<th>Tanggal</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
if($tableQuery->num_rows != 0) {
    while($table = mysqli_fetch_array($tableQuery)){
        setlocale(LC_ALL, 'ID');
        $xTgl = date_create($table['tanggal']);
        $yTgl = date_format($xTgl, 'Y-m-d h:i:sA');
        $tgl = strftime('%e %B %Y', strtotime($yTgl));
        ?>
        <tr>
        <td><?php echo $table['id']; ?></td>
        <td><?php echo $table['jenis']; ?></td>
        <td><?php if($table['mkwu'] == 0) { echo "MKWU"; } else { echo "Non-MKWU"; } ?></td>
        <td><?php echo $table['ta']; ?></td>
        <td><?php echo $table['mk']; ?></td>
        <td><?php echo $table['kode_mk']; ?></td>
        <td><?php echo $table['prodi']; ?></td>
        <td><?php echo $tgl; ?></td>
        <td>
        <div id="aksi" class="container">
			<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" class="aksi" href="<?php echo $siteurl; ?>preview/?id=<?php echo $table['id']; ?>&mk=<?php echo $table['mk']; ?>&author=<?php echo $data['nama']; ?>"><img src="<?php echo $siteurl; ?>assets/show.png"></a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" class="aksi" href="<?php echo $siteurl; ?>edit/?act=dokumen&id=<?php echo $table['id']; ?>"><img src="<?php echo $siteurl; ?>assets/edit.png"></a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" class="aksi" href="#" onclick="delet(<?php echo $table['id']; ?>)"><img src="<?php echo $siteurl; ?>assets/delete.png"></a>
			</div>
			</div>
			</div>
        </td>
        </tr>
        <?php
    }
}
?>
</tbody>
</table>
<div class="w-100 text-center">
<a class="btn btn-danger" href="<?php echo $siteurl; ?>" target="_self">Kembali</a>
</div>
</div>
</div>
</div>
<!-- end main content -->

<script src="<?php echo $siteurl; ?>assets/bootstrap.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/lp3.js"></script>
</body>

</html>