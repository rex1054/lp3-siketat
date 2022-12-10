<?php
require('../../master.php');

if(isset($_GET['ta'])){
    $ta = $_GET['ta'];

    $getprodi = "SELECT `id_prodi` FROM `prodi` WHERE `primer` = 1";
    $query = $con->query($getprodi);
    while($data = mysqli_fetch_array($query)){
        $sql = 'INSERT INTO `mk`(`id_ta`, `id_prodi`, `jumlah_mk`) VALUES ('.$ta.','.$data['id_prodi'].',0)';
        $con->query($sql);
    }

    ?>
    <script>window.open('<?php echo $siteurl; ?>admin/', '_SELF');</script>
    <?php
}
?>