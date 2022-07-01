<?php
require('../master.php');
$getDataQuery;
$jumlah;

if(isset($_GET['act'])){
    if($_GET['act']=='prodi') {
        $getDataQuery = "SELECT COUNT(dokumen.id) as 'COUNT(id)', mk.jumlah_mk FROM dokumen join mk on dokumen.prodi = mk.id_prodi join prodi on mk.id_prodi = prodi.id_prodi where dokumen.prodi = ".$_GET['id_pro']." AND prodi.primer = 1 AND  dokumen.jenis = ".$_GET['jenis']." AND dokumen.ta = ".$_GET['ta'];
        $getInfo = $con->query($getDataQuery);
        $hasil = $getInfo->fetch_assoc();
        if($hasil['jumlah_mk'] == 0){
            $jumlah = 0;
        } else {
            $jumlah = $hasil['COUNT(id)']/$hasil['jumlah_mk']*100;
        }
    } else {
        $temp = 0;
        for($a = 0; $a < 60; $a++){
            $getDataQuery = "SELECT COUNT(dokumen.id) as 'COUNT(id)', mk.jumlah_mk FROM dokumen join mk on dokumen.prodi = mk.id_prodi join prodi on mk.id_prodi = prodi.id_prodi where dokumen.prodi = ".$a." AND prodi.primer = 1 AND dokumen.jenis = 1 AND dokumen.ta = ".$_GET['ta'];
            $req = $con->query($getDataQuery);
            $data = $req->fetch_assoc();
            if($data['jumlah_mk']==0){
                $temp += 0;
            } else {
                $temp += ($data['COUNT(id)']/$data['jumlah_mk']*100);
            }
        }
        $jumlah = $temp/28;
    }
}

echo round($jumlah,2);
?>