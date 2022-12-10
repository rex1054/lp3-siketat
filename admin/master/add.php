<?php
require('../../master.php');
$tahun = $_POST['tahun'];
$semester = $_POST['semester'];
$ta = $tahun.' '.$semester;

$sql = 'SELECT ta from ta where ta = "'.$ta.'"';
$hasil = $con->query($sql);
if($hasil->num_rows == 0){
$query = 'INSERT INTO `ta`(`ta`) VALUES ("'.$ta.'")';

    if ($con->query($query) === TRUE) {
        ?>
        <script>
        console.log("Berhasil menyimpan data");
        var z = confirm("Berhasil menyimpan data");
        if (z == true) {
            window.open('<?php echo $siteurl ?>admin/', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl ?>admin/', '_SELF');
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
            window.open('<?php echo $siteurl ?>admin/', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl ?>admin/', '_SELF');
        }
        </script>
        <?php
    }
} else {
    ?>
        <script>
        console.log("Gagal menyimpan data");
        var z = confirm("Gagal menyimpan data, TA sudah ada");
        if (z == true) {
            window.open('<?php echo $siteurl ?>admin/', '_SELF');
        }
        else {
            window.open('<?php echo $siteurl ?>admin/', '_SELF');
        }
        </script>
        <?php
}
?>