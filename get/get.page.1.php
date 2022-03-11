<?php
// start get first information table
require_once('../master.php');
$hehe = $_GET['id'];
$getInfoQuery = "SELECT jenis.jenis, fakultas.fakultas, prodi.prodi, dokumen.mk, dokumen.modul, dokumen.kode_mk, dokumen.kode_dokumen, dosen.nama, dokumen.tanggal from dokumen join jenis on dokumen.jenis = jenis.id_jenis join fakultas on dokumen.fakultas = fakultas.id_fakultas join prodi on dokumen.prodi = prodi.id_prodi join dosen on dokumen.penyusun = dosen.id where dokumen.id = ".$hehe;
$getInfo = $con->query($getInfoQuery);
$hasil = $getInfo->fetch_assoc();
if($getInfo->num_rows == 0) {

    ?>
    <tr>
        <td>Dokumen yang diterima</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Fakultas</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Program Studi</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Mata Kuliah</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Kode Mata Kuliah</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Kode Dokumen</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Penyusun / Ketua Penyusun</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td></td>
    </tr>
    <?php

} else {
    setlocale(LC_ALL, 'ID');
    $xTgl = date_create($hasil['tanggal']);
    $yTgl = date_format($xTgl, 'Y-m-d h:i:sA');
    $tgl = strftime('%e %B %Y', strtotime($yTgl));
    ?>
    <tr>
        <td>Dokumen yang diterima</td>
        <td>:</td>
        <td><?php echo $hasil['jenis'].' '.$hasil['modul']; ?></td>
    </tr>
    <tr>
        <td>Fakultas</td>
        <td>:</td>
        <td><?php echo $hasil['fakultas']; ?></td>
    </tr>
    <tr>
        <td>Program Studi</td>
        <td>:</td>
        <td><?php echo $hasil['prodi']; ?></td>
    </tr>
    <tr>
        <td>Mata Kuliah</td>
        <td>:</td>
        <td><?php echo $hasil['mk']; ?></td>
    </tr>
    <tr>
        <td>Kode Mata Kuliah</td>
        <td>:</td>
        <td><?php echo $hasil['kode_mk']; ?></td>
    </tr>
    <tr>
        <td>Kode Dokumen</td>
        <td>:</td>
        <td><?php echo $hasil['kode_dokumen']; ?></td>
    </tr>
    <tr>
        <td>Penyusun / Ketua Penyusun</td>
        <td>:</td>
        <td><?php echo $hasil['nama']; ?></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td><?php echo $tgl; ?></td>
    </tr>
    <?php
}
// end get first information table
?>