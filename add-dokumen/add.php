<?php
include('../config.php');
require('../master.php');
$jenis = $_POST['jenis-dokumen'];
$ta = $_POST['tahun-akademik'];
$modul;
if(isset($_POST['modul'])){
$modul = $_POST['modul'];
} else {
    $modul = "";
}
$fak = $_POST['fakultas'];
$prodi = $_POST['prodi'];
$mk = $_POST['matakuliah'];
$kodeMK = $_POST['kode-matakuliah'];
$kodeDok = $_POST['kode-dokumen'];
$penyusun = $_POST['penyusun'];
$tanggal = $_POST['tanggal'];

$query = "INSERT INTO `dokumen`(`jenis`, `ta`, `modul`, `fakultas`, `prodi`, `mk`, `kode_mk`, `kode_dokumen`, `penyusun`, `tanggal`) 
VALUES (
    '".$jenis."',
    '".$ta."',
    '".$modul."',
    '".$fak."',
    '".$prodi."',
    '".$mk."',
    '".$kodeMK."',
    '".$kodeDok."',
    '".$penyusun."',
    '".$tanggal."'
    )";

    if ($con->query($query) === TRUE) {
        ?>
        <script>
        console.log("Berhasil menyimpan data");
        var z = confirm("Berhasil menyimpan data");
        if (z == true) {
            window.open('<?php echo $siteurl; ?>', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl; ?>', '_SELF');
        }
        </script>
        <?php
    }
    else {
        ?>
        <script>
        console.log("Gagal menyimpan data");
        var z = confirm("Gagal menyimpan data");
        if (z == true) {
        }
        else {
        }
        </script>
        <?php
    }
?>