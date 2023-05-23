<?php
require('master.php');
$getDataQuery;
$jumlah;

if(isset($_GET['act'])){
    if($_GET['act']=='prodi') {
        
        $getMKQuery = "SELECT jumlah_mk from mk where id_prodi = ".$_GET['id_pro']." AND id_ta = ".$_GET['ta'];
        $getMK = $con->query($getMKQuery);
        $getRPSQuery = "SELECT COUNT(id) as 'rps' from dokumen where jenis = 1 AND ta = ".$_GET['ta']." AND prodi = ".$_GET['id_pro'];
        $getRPS = $con->query($getRPSQuery);
        
        $mk = $getMK->fetch_assoc();
        $rps = $getRPS->fetch_assoc();
        
        if(isset($mk['jumlah_mk'])){
            if($mk['jumlah_mk'] == 0 || $rps['rps'] == 0){
                $jumlah = 0;
            } else {
                $jumlah = $rps['rps'] / $mk['jumlah_mk'] *100;
            }
        }
        
    } else {
        $temp = 0;
        $getProdiQuery = "SELECT id_prodi, prodi from prodi where primer = 1";
        $getProdi = $con->query($getProdiQuery);
        
        if($getProdi->num_rows != 0) {
            if(mysqli_num_rows($getProdi)>0) { 
                while ($prodi = mysqli_fetch_array($getProdi)) {
                    $getMKQuery = "SELECT jumlah_mk from mk where id_prodi = ".$prodi['id_prodi']." AND id_ta = ".$_GET['ta'];
                    $getMK = $con->query($getMKQuery);
                    $getRPSQuery = "SELECT COUNT(id) as 'rps' from dokumen where jenis = 1 AND ta = ".$_GET['ta']." AND prodi = ".$prodi['id_prodi'];
                    $getRPS = $con->query($getRPSQuery);
                    
                    $mk = $getMK->fetch_assoc();
                    $rps = $getRPS->fetch_assoc();
                    
                    if(isset($mk['jumlah_mk'])){
                        if($mk['jumlah_mk'] == 0 || $rps['rps'] == 0){
                            $temp += 0;
                        } else {
                            $temp += $rps['rps'] / $mk['jumlah_mk'] *100;
                        }
                        
                    }
                } 
            }
        }
        $jumlah = $temp/mysqli_num_rows($getProdi);
    }
}

echo round($jumlah,2);
?>