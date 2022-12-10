<?php
require_once('../../../master.php');

if(isset($_GET['id'])){
    $sql = "DELETE FROM prodi where id_prodi = ".$_GET['id'];
    $query = $con->query($sql);

    if ($query === true){
        ?>
            <script>
                alert('Berhasil menghapus data.');
                window.open('<?php echo $siteurl.'admin/fakultas/detail/?id='.$fakultas; ?>', '_SELF');
            </script>
        <?php
    } else {
        ?>
            <script>
                alert('Gagal menghapus data.');
                window.open('<?php echo $siteurl.'admin/fakultas/detail/?id='.$fakultas; ?>', '_SELF');
            </script>
        <?php
    }
}
?>