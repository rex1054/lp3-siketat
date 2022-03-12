<?php
require('master.php');
$getDataQuery;
$jumlah;
if(isset($_GET['act'])){
    if($_GET['act']=='fakultas'){
        $getDataQuery = "SELECT COUNT(id) FROM dokumen where fakultas = ".$_GET['id_fak']." AND jenis = ".$_GET['jenis']." AND ta = ".$_GET['ta'];
    }
    else if($_GET['act']=='prodi') {
        $getDataQuery = "SELECT COUNT(dokumen.id) as 'COUNT(id)', mk.jumlah_mk FROM dokumen join mk on dokumen.prodi = mk.id_prodi where dokumen.prodi = ".$_GET['id_pro']." AND  dokumen.jenis = ".$_GET['jenis']." AND dokumen.ta = ".$_GET['ta'];
    } else {
        $getDataQuery = "SELECT COUNT(dokumen.id)/SUM(mk.jumlah_mk)*100 as 'COUNT(id)' from dokumen join mk on dokumen.prodi = mk.id_prodi where dokumen.jenis = ".$_GET['jenis']." AND dokumen.ta = ".$_GET['ta'];
    }
}

$getInfo = $con->query($getDataQuery);
$hasil = $getInfo->fetch_assoc();
if($_GET['act'] == 'prodi'){
    if($hasil['jumlah_mk'] == 0){
        $jumlah = 0;
    } else {
        $jumlah = $hasil['COUNT(id)']/$hasil['jumlah_mk']*100;
    }
} else {
    $jumlah = $hasil['COUNT(id)'];
}

echo $jumlah;
?>