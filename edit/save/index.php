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
    $tanggal = $_POST['tanggal'];
    $sukses = false;
    
    $getPenyusunQuery = "SELECT * FROM penyusun WHERE id_dokumen =".$_GET['id'];
    $getPenyusun = $con->query($getPenyusunQuery);
    $p = 1;
    $arrayDosen;
    for($a = 0; $a<10; $a++){
        if($_POST['penyusun'.($a+1)] == ''){
            break;
        } else {
            $arrayDosen[$a] = $_POST['penyusun'.($a+1)];
        }
    }
    
    $ey = count($arrayDosen);
    $ez = $getPenyusun->num_rows;

    // hapus dulu
    $removequery = "DELETE FROM penyusun WHERE id_dokumen = ".$_GET['id'];
    $con->query($removequery);

    // baru insert
    for($b = 0; $b < $ey; $b++) {
        $insertQuery = 'INSERT INTO `penyusun`(`id_dokumen`, `id_dosen`) VALUES ('.$_GET['id'].','.$_POST['penyusun'.($b+1)].')';
        $con->query($insertQuery);
    }
    
    $query = 'UPDATE `dokumen` SET
    `jenis`="'.$jenis.'", 
    `ta`="'.$ta.'", 
    `modul`="'.$modul.'", 
    `fakultas`="'.$fak.'", 
    `prodi`="'.$prodi.'", 
    `mk`="'.$mk.'", 
    `kode_mk`="'.$kodeMK.'", 
    `kode_dokumen`="'.$kodeDok.'",
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