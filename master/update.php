<?php
include('../config.php');
require('../master.php');
$id = $_POST['id'];
$mk = $_POST['jumlah-mk'];
$query = 'UPDATE `mk` SET `jumlah_mk`='.$mk.' WHERE id = '.$id;

    if ($con->query($query) === TRUE) {
        ?>
        <script>
        console.log("Berhasil menyimpan data");
        var z = confirm("Berhasil menyimpan data");
        if (z == true) {
            window.open('<?php echo $siteurl."master/?ta=".$_POST['ta']; ?>', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl."master/?ta=".$_POST['ta']; ?>', '_SELF');
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
            window.open('<?php echo $siteurl."master/?ta=".$_POST['ta']; ?>', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl."master/?ta=".$_POST['ta']; ?>', '_SELF');
        }
        </script>
        <?php
    }
?>