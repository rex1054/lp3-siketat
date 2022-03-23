<?php
include('../config.php');
require('../master.php');
$id = $_POST['id-fakultas'];
$fakultas = $_POST['edit-nama-fakultas'];
$email = $_POST['edit-email-fakultas'];
$query = 'UPDATE `fakultas` SET `fakultas`="'.$fakultas.'",`email`="'.$email.'" WHERE id_fakultas = '.$id;

    if ($con->query($query) === TRUE) {
        ?>
        <script>
        console.log("Berhasil menyimpan data");
        var z = confirm("Berhasil menyimpan data");
        if (z == true) {
            window.open('<?php echo $siteurl ?>'+'fakultas', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl ?>'+'fakultas', '_SELF');
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