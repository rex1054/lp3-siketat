<?php
require('../../master.php');
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
$tanggal = $_POST['tanggal'];

$getDokumenIdQuery = "SELECT * from dokumen ORDER BY id DESC LIMIT 1";
$getDokumenId = $con->query($getDokumenIdQuery);
$getDokumen = $getDokumenId->fetch_assoc();
$dokumenId = $getDokumen['id']+1;

$query = 'INSERT INTO `dokumen`(`jenis`, `ta`, `modul`, `fakultas`, `prodi`, `mk`, `kode_mk`, `kode_dokumen`, `tanggal`) 
VALUES (
    "'.$jenis.'",
    "'.$ta.'",
    "'.$modul.'",
    "'.$fak.'",
    "'.$prodi.'",
    "'.$mk.'",
    "'.$kodeMK.'",
    "'.$kodeDok.'",
    "'.$tanggal.'"
    )';

    if ($con->query($query) === TRUE) {
        ?>
        <script>
        console.log("Berhasil menyimpan data");
        var z = confirm("Berhasil menyimpan data");
        if (z == true) {
            window.open('<?php echo $siteurl; ?>admin/', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl; ?>admin/', '_SELF');
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
            window.open('<?php echo $siteurl; ?>admin/', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl; ?>admin/', '_SELF');
        }
        </script>
        <?php
    }

    
for($i = 0; $i < 10; $i++) {
    $penyusun = $_POST['penyusun'.($i+1)];
    if($penyusun == ''){
        break;
    } else {
    $addPenyusunQuery = "INSERT INTO penyusun (id_dokumen, id_dosen) VALUES (".($dokumenId).", ".$penyusun.")";
    $con->query($addPenyusunQuery);
    }
}

?>