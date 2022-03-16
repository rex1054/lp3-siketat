<?php
include('../../config.php');
require('../../master.php');
$id;
$jenis;
$ta;
$modul;
$fak;
$prodi;
$mk;
$kodeMK;
$kodeDok;
$penyusun;
$tanggal;
$query;

if ($_GET['act'] == 'dokumen') {
    
    $id = $_GET['id'];
    $jenis = $_POST['jenis-dokumen'];
    $ta = $_POST['tahun-akademik'];
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
    
    $query = 'UPDATE `dokumen` SET
    `jenis`="'.$jenis.'", 
    `ta`="'.$ta.'", 
    `modul`="'.$modul.'", 
    `fakultas`="'.$fak.'", 
    `prodi`="'.$prodi.'", 
    `mk`="'.$mk.'", 
    `kode_mk`="'.$kodeMK.'", 
    `kode_dokumen`="'.$kodeDok.'", 
    `penyusun`="'.$penyusun.'", 
    `tanggal`="'.$tanggal.'" WHERE `id`='.$id;
    
} else if ($_GET['act'] == 'dosen') {
    $id = $_GET['id'];
    $query = 'UPDATE `dosen` SET
    `nama` = "'.$_POST['nama'].'",
    `npk` = "'.$_POST['npk'].'" WHERE `id` = '.$id;
}


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