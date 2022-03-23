<?php
include('../../config.php');
require('../../master.php');
$id = $_POST['id-prodi'];
$prodi = $_POST['edit-nama-prodi'];
$email;
$primer;
if(isset($_POST['edit-email-prodi'])){
    $email = $_POST['edit-email-prodi'];
} else {
    $email = '-';
}
if(isset($_POST['edit-primer'])) {
    $primer = $_POST['edit-primer'];
} else {
    $primer = 0;
}
$query = 'UPDATE `prodi` SET `prodi`="'.$prodi.'",`email`="'.$email.'", `primer`='.$primer.' WHERE id_prodi = '.$id;

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