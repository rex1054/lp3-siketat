<?php
require('../../../master.php');
$prodi = $_POST['nama-prodi'];
$fakultas = $_POST['id-fakultas'];
$email;
$primer;
if(isset($_POST['email-prodi'])){
    $email = $_POST['email-prodi'];
} else {
    $email = '-';
}
if(isset($_POST['primer'])) {
    $primer = $_POST['primer'];
} else {
    $primer = 0;
}
$query;
$query = 'INSERT INTO `prodi`(`prodi`, `email`, `id_fakultas`, `primer`) 
    VALUES (
        "'.$prodi.'",
        "'.$email.'",
        '.$fakultas.',
        '.$primer.'
        )';

    if ($con->query($query) === TRUE) {
        ?>
        <script>
        console.log("Berhasil menyimpan data");
        var z = confirm("Berhasil menyimpan data");
        if (z == true) {
            window.open('<?php echo $siteurl.'admin/fakultas/detail/?id='.$fakultas; ?>', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl.'admin/fakultas/detail/?id='.$fakultas; ?>', '_SELF');
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
            window.open('<?php echo $siteurl.'admin/fakultas/detail/?id='.$fakultas; ?>', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl.'admin/fakultas/detail/?id='.$fakultas; ?>', '_SELF');
        }
        </script>
        <?php
    }
?>