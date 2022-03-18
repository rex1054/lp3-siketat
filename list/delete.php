<?php 
include('../config.php');
require_once('../master.php');

if(isset($_GET['id'])){
    $sql = "DELETE FROM dokumen where id = ".$_GET['id'];
    $sql2 = "DELETE FROM penyusun where id_dokumen = ".$_GET['id'];
    $query = $con->query($sql);
    $query2 = $con->query($sql2);

    if ($query === true){
        ?>
            <script>
                alert('Berhasil menghapus data.');
                window.open('<?php echo $siteurl; ?>', '_SELF');
            </script>
        <?php
    } else {
        ?>
            <script>
                alert('Gagal menghapus data.');
                window.open('<?php echo $siteurl; ?>', '_SELF');
            </script>
        <?php
    }
}
?>