<?php
include('../config.php');
require('../master.php');
$nama = $_POST['nama'];
$npk;
$query;
if (isset($_POST['npk'])) {
    $npk = $_POST['npk'];
    $query = 'INSERT INTO `dosen`(`nama`, `npk`) 
    VALUES (
        "'.$nama.'",
        "'.$npk.'"
        )';
} else {
    $query = 'INSERT INTO `dosen`(`nama`, `npk`) 
    VALUES (
        "'.$nama.'",
        '-'
        )';
}

    if ($con->query($query) === TRUE) {
        ?>
        <script>
        console.log("Berhasil menyimpan data");
        var z = confirm("Berhasil menyimpan data");
        if (z == true) {
            window.open('<?php echo $siteurl ?>', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl ?>', '_SELF');
        }
        </script>
        <?php
    }
    else {
        ?>
        <script>
        console.log("Gagal menyimpan data");
        var z = confirm("Gagal menyimpan data, cek apakah nama sudah ada");
        if (z == true) {
        }
        else {
        }
        </script>
        <?php
    }
?>