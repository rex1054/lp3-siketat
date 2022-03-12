<!DOCTYPE html>
<html lang="en">
<?php include('../config.php'); ?>
<head>
<title>Tanda Terima LP3 - <?php echo $_GET['author']." - ".$_GET['mk']; ?></title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="<?php echo $siteurl; ?>assets/logo.jpg">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/lp3-preview.css" media="screen, display">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/lp3-print.css" media="print">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<script src="<?php echo $siteurl; ?>assets/jquery.min.js"></script>
</head>

<body>
<!-- start get parameter -->
<?php
$idDok = $_GET['id'];
?>
<!-- end get parameter -->

<!-- start page 1 section -->
<div class="container page-1">

<!-- start header section -->
<div class="row header-section">
<div class="col-md-1">
<img class="header-logo logo-left" src="<?php echo $siteurl; ?>assets/logo.jpg">
</div>
<div class="col-md-10 header-lp3">
<h3>UNIVERSITAS MUHAMMADIYAH JEMBER</h3>
<h4>LEMBAGA PENGKAJIAN DAN PENGEMBANGAN PENDIDIKAN (LP3)</h4>
<h4>Jl. Karimata No. 49 Jember 68121 Jawa Timur Indonesia</h4>
<h4>Kotak Pos 104 Telp. 0331-336728 Fax. 0331-337957</h4>
<h4>Website : <a href="https://www.unmuhjember.ac.id">https://www.unmuhjember.ac.id</a> E-mail:<a href="mailto:kantorpusat@unmuhjember.ac.id">kantorpusat@unmuhjember.ac.id</a></h4>
</div>
<div class="col-md-1">
<img class="header-logo logo-right" src="<?php echo $siteurl; ?>assets/iso.jpg">
</div>
</div>
<!-- end header section -->

<!-- start section a -->
<div class="row main-title">
<div class="col-md-12">
<h2>TANDA TERIMA DOKUMEN</h2>
</div>
</div>

<div class="row section-a">
<div class="col-md-12">
<table id="tabel-a">
<?php include('../get/get.page.1.php');?>
</table>
</div>
</div>
<!-- end section a -->

<!-- start section b -->
<div class="row section-b">
<div class="col-md-12">
<table id="tabel-b">
<th>NO.</th>
<th>DAFTAR PERIKSA LP3</th>
<th>HASIL PERIKSA</th>

<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td>Dokumen telah diterima LP3.</td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</div>
</div>
<!-- end section b -->

<!-- start validator section -->
<div class="row section-c">
<div class="col-md-12">
<p>Pemeriksa/Validator: Ilanka Cahya Dewi, S.T., M.T (.................................)</p>
<br/>
<p>Hasil Pemeriksaan: Telah divalidasi dan disetujui untuk digunakan.</p>
</div>
</div>
<!-- end validator section -->

<!-- start signature section -->
<div class="row section-d">
<div class="col-md-12">
<p>Jember, <?php echo $tgl; ?></p>
<p>Ketua LP3,</p>
<br/>
<img id="signature-a" src="<?php echo $siteurl; ?>assets/signature.jpg">
<br/>
<br/>
<br/>
<p style="line-height:0.3;">(<z>Dr. Nikmatur Rohmah, M.Kes.</z>)</p>
<p style="line-height:0;">NIP. 197206262005012001</p>
</div>
</div>
<!-- end signature section -->

<!-- end page 1 section -->

</div>

<!-- end page 1 section -->

<!-- start page 2 section -->
<div class="container page-2">

<!-- start header section -->
<div class="row header-section">
<div class="col-md-1">
<img class="header-logo logo-left" src="<?php echo $siteurl; ?>assets/logo.jpg">
</div>
<div class="col-md-10 header-lp3">
<h3>UNIVERSITAS MUHAMMADIYAH JEMBER</h3>
<h4>LEMBAGA PENGKAJIAN DAN PENGEMBANGAN PENDIDIKAN (LP3)</h4>
<h4>Jl. Karimata No. 49 Jember 68121 Jawa Timur Indonesia</h4>
<h4>Kotak Pos 104 Telp. 0331-336728 Fax. 0331-337957</h4>
<h4>Website : <a href="https://www.unmuhjember.ac.id">https://www.unmuhjember.ac.id</a> E-mail:<a href="mailto:kantorpusat@unmuhjember.ac.id">kantorpusat@unmuhjember.ac.id</a></h4>
</div>
<div class="col-md-1">
<img class="header-logo logo-right" src="<?php echo $siteurl; ?>assets/iso.jpg">
</div>
</div>
<!-- end header section -->

<!-- start page 2 table section -->
<div class="row section-e">
<div class="col-md-12">
<table id="tabel-c">
<tr>
<th><img class="page-2-table-img" src="<?php echo $siteurl; ?>assets/logo.jpg"></th>
<th>
<p style="line-height:0;margin-bottom:10px;">UNIVERSITAS MUHAMMADIYAH JEMBER</p>
<P>LEMBAGA PENGKAJIAN DAN PENGAMBANGAN PENDIDIKAN (LP3)</p><br/>
<p>LEMBAR VALIDASI DOKUMEN <?php
if($hasil['jenis'] == 'RPS') {
    echo 'RPS';
} else
if($hasil['jenis'] == 'MODUL') {
    echo 'MODUL '.$hasil['modul'];
} else
if($hasil['jenis'] == 'PEDOMAN') {
    echo 'PEDOMAN';
} else
if($hasil['jenis'] == 'BAHAN AJAR') {
    echo 'BAHAN AJAR';
}
?></p>
</th>
</tr>
<?php
include('../get/get.page.2.php');
?>
<tr style="height: 150px;">
<td style="text-align:center;padding-left:15px;padding-right:15px;"><b>Ketua LP3 Unmuh Jember</b></td>
<td style="padding-top:90px;" id="page-2-signature">
<img id="signature-b" src="<?php echo $siteurl; ?>assets/signature.jpg">
<p style="line-height:0.1;"><z>Dr. Nikmatur Rohmah, M.Kes.</z></p>
<p>NIP. 197206262005012001</p>
</td>
</tr>
</table>
</div>
</div>
<!-- end page 2 table section -->

</div>
<!-- end page 2 section -->

<!-- start navigation section -->
<div class="container" id="navigasi">
<ul class="nav justify-content-center">
<li class="nav-item" role="presentation">
<button class="nav-link btn btn-outline-danger text-black" id="kembali-tab" type="button" onclick="backFunc()">Kembali</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link btn btn-outline-primary text-black" id="ubah-tab" type="button" onclick="editFunc('<?php echo $idDok; ?>')">Ubah</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link btn btn-outline-success text-black" id="signature-tab" type="button" onclick="signFunc()">TTD</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link btn btn-outline-info text-black" id="print-tab" type="button" onclick="printFunc()">Cetak</button>
</li>
</ul>
</div>
<!-- end navigation section -->

<script type="text/javascript" src="<?php echo $siteurl; ?>assets/lp3.js"></script>
</body>

</html>