<?php
include('../config.php');
require('../master.php');
$fakultas = $_POST['nama-fakultas'];
$email;
if(isset($_POST['email-fakultas'])){
    $email = $_POST['email-fakultas'];
} else {
    $email = '-';
}
$query;
$query = 'INSERT INTO `fakultas`(`fakultas`, `email`) 
    VALUES (
        "'.$fakultas.'",
        "'.$email.'"
        )';

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