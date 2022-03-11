<?php
require('master.php');
$getDataQuery;
if(isset($_GET['act'])){
    if($_GET['act']=='fakultas'){
        $getDataQuery = "SELECT COUNT(id) FROM dokumen where fakultas = ".$_GET['id_fak']." AND jenis = ".$_GET['jenis'];
    }
    else if($_GET['act']=='prodi') {
        $getDataQuery = "SELECT COUNT(id) FROM dokumen where prodi = ".$_GET['id_pro']." AND jenis = ".$_GET['jenis'];
    } else {
        $getDataQuery = "SELECT COUNT(id)/9 as 'COUNT(id)' from dokumen where jenis = ".$_GET['jenis'];
    }
}

$getInfo = $con->query($getDataQuery);
$hasil = $getInfo->fetch_assoc();
$jumlah = $hasil['COUNT(id)'];
echo $jumlah;
?>