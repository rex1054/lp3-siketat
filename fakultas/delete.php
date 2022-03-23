<?php 
include('../config.php');
require_once('../master.php');

if(isset($_GET['id'])){
    $sql = "DELETE FROM fakultas where id_fakultas = ".$_GET['id'];
    $sql2 = "DELETE FROM prodi where id_fakultas = ".$_GET['id'];
    $query = $con->query($sql);
    $query2 = $con->query($sql2);

    if ($query === true){
        ?>
            <script>
                alert('Berhasil menghapus data.');
                window.open('<?php echo $siteurl; ?>fakultas', '_SELF');
            </script>
        <?php
    } else {
        ?>
            <script>
                alert('Gagal menghapus data.');
                window.open('<?php echo $siteurl; ?>fakultas', '_SELF');
            </script>
        <?php
    }
}
?>