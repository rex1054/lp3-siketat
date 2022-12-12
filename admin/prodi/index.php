<!DOCTYPE html>
<html lang="en">
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
$sql = "SELECT * FROM prodi WHERE id_prodi = ".$_GET['id'];
$query = $con->query($sql);
$data = $query->fetch_assoc();
$ta;

$sql2;
$tableSQL;
if(isset($_GET['ta'])){
    $sql2 = "SELECT * FROM ta WHERE id_ta = ".$_GET['ta'];
    $tableSQL = "SELECT dokumen.id, dokumen.mk, jenis.jenis, jenis.mkwu, ta.ta, prodi.prodi, dokumen.tanggal, dokumen.kode_mk FROM dokumen JOIN penyusun ON dokumen.id = penyusun.id_dokumen JOIN jenis ON dokumen.jenis = jenis.id_jenis JOIN ta ON dokumen.ta = ta.id_ta JOIN prodi ON dokumen.prodi = prodi.id_prodi WHERE dokumen.prodi = ".$_GET['id']." AND dokumen.ta = ".$_GET['ta']." ORDER BY id DESC";

    $ta = $con->query($sql2)->fetch_assoc();
} else {
    $tableSQL = "SELECT dokumen.id, dokumen.mk, jenis.jenis, jenis.mkwu, ta.ta, prodi.prodi, dokumen.tanggal, dokumen.kode_mk FROM dokumen JOIN penyusun ON dokumen.id = penyusun.id_dokumen JOIN jenis ON dokumen.jenis = jenis.id_jenis JOIN ta ON dokumen.ta = ta.id_ta JOIN prodi ON dokumen.prodi = prodi.id_prodi WHERE dokumen.prodi = ".$_GET['id']." ORDER BY id DESC";
}

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
<h4>© <a href="<?php echo $authorlink; ?>" target="_blank">Ahmad Firdaus Ababil</a> @<?php echo $rights; ?> | <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> & <a href="https://soj.my.id/" target="_blank">SOJ</a> powered</h4>
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
<h2 style="font-size: 16pt; text-decoration: underline;">Dokumen Program Studi</h2><br/>
</div>
</div>
<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
<h3>ID</h3>
<h3>Program Studi</h3>
<h3>Jumlah Dokumen</h3>
</div>
<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
<h3>: <?php echo $data['id_prodi'] ?></h3>
<h3>: <?php echo $data['prodi'] ?></h3>
<h3>: <?php echo $tableQuery->num_rows; ?></h3>
</div>
</div><br/>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
<form action="<?php echo $siteurl; ?>prodi/" method="GET">
<select class="form-select" id="ta" name="ta" onchange="prodi(<?php echo $_GET['id']; ?>, this.value)" required aria-label="pilih tahun akademik">
<option selected disabled value=""><?php if(isset($_GET['ta'])){ echo $ta['ta'];} else {echo 'Pilih Tahun Akademik';} ?></option>
<?php
include('../get/get.ta.php');
?>
</select>
</form>
</div>
</div>
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
<th>Penyusun</th>
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
        
        $sql1 = "SELECT dosen.nama from dosen join penyusun on penyusun.id_dosen = dosen.id where penyusun.id_dokumen = ".$table['id']." limit 1";
        $dosen = $con->query($sql1)->fetch_assoc();
        ?>
        <tr>
        <td><?php echo $table['id']; ?></td>
        <td><?php echo $table['jenis']; ?></td>
        <td><?php if($table['mkwu'] == 1) { echo "MKWU"; } else { echo "Non-MKWU"; } ?></td>
        <td><?php echo $table['ta']; ?></td>
        <td><?php echo $table['mk']; ?></td>
        <td><?php echo $table['kode_mk']; ?></td>
        <td><?php echo $dosen['nama']; ?></td>
        <td><?php echo $tgl; ?></td>
        <td>
        <div id="aksi" class="container">
        <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <a target="_self" class="aksi" href="<?php echo $siteurl; ?>preview/?id=<?php echo $table['id']; ?>&mk=<?php echo $table['mk']; ?>&author=<?php echo $dosen['nama']; ?>"><img src="<?php echo $siteurl; ?>assets/show.png"></a>
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
<br/>
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