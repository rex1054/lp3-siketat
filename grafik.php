<?php
require_once('master.php');

if(!isset($_GET['t'])){
    $sql = 'SELECT * FROM ta ORDER BY id_ta DESC LIMIT 1';
    $getta = $con->query($sql);
    if($getta){
        $data = $getta->fetch_assoc();
        $_GET['t'] = $data['ta'];
        $_GET['ta'] = $data['id_ta'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>LP3 - CAPAIAN RPS TAHUN AKADEMIK <?php echo $_GET['t']; ?></title>
<meta name="description" content="Sistem Kelola Tanda Terima">
<meta name="author" content="REXYST">

<link rel="icon" type="image/png" href="<?php echo $siteurl; ?>assets/img/logo.jpg">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/DataTables/datatables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/lp3-main.css">
<link rel="stylesheet" href="<?php echo $siteurl; ?>assets/css/dashboard.css">
<link rel="stylesheet" href="<?php echo $siteurl; ?>assets/css/dashboard-print.css">

</head>

<body onafterprint="window.close()">
<div class="container">
<main class="col-sm-12 col-md-12 col-lg-12">
<h4 style="margin-bottom: 25px; color:black;">Capaian RPS Semester <?php echo $_GET['t']; ?> (Data per tanggal <?php echo date_format(date_create('now'), 'd-m-Y'); ?>)</h4>
<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Grafik Capaian RPS Tahun Akademik <?php echo $_GET['t']; ?> (dalam %)</h2>
</div>
<canvas class="my-4 w-100" id="grafik" aria-label="grafik" role="img"></canvas>
</main>
</div>

<script src="<?php echo $siteurl; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/DataTables/datatables.min.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.umd.js" integrity="sha512-gQhCDsnnnUfaRzD8k1L5llCCV6O9HN09zClIzzeJ8OJ9MpGmIlCxm+pdCkqTwqJ4JcjbojFr79rl2F1mzcoLMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo $siteurl; ?>assets/js/annotation.js"></script>
<script src="<?php echo $siteurl; ?>assets/js/lp3.js"></script>
<?php
$sql = "SELECT id_prodi from prodi where primer = 1";
$prodiQuery = $con->query($sql);
$prodi;
$p = 0;
while($data = mysqli_fetch_array($prodiQuery)){
    $prodi[$p] = $data['id_prodi'];
    $p++;
}
?>
<script>  
var ctx = document.getElementById('grafik');
const myChart = new Chart(ctx, {
    type: 'line',
    legend: {
        display: false
    },
    data: {
        datasets: [{
            label: 'RPS',
            data: [
                <?php 
                $_GET['act']='prodi';
                for($i = 0; $i < count($prodi); $i++){
                    $_GET['id_pro']=$prodi[$i];
                    $_GET['jenis']='1';
                    
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
                    if($i == count($prodi)-1) {}
                    else{
                        echo ',';
                    }
                } ?>
            ],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 2,
            pointBackgroundColor: '#007bff'
        }],
        labels: [
            <?php
$getDataQuery;
$getDataQuery = "SELECT nick FROM prodi where primer = 1";

$getInfo = $con->query($getDataQuery);
$jumlah = $getInfo->num_rows;
$x=1;
while($data = mysqli_fetch_array($getInfo)){
    if($x == ($jumlah)){
        echo "'".$data['nick']."'";
    } else {
        echo "'".$data['nick']."', ";
        $x++;
    }
}
?>
            ]
        },
        options: {
            scales: {
                y: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            },
            plugins:{
                legend: {
                    display: false
                },
                annotation: {
                    annotations: [{
                        type: 'line',
                        mode: 'horizontal',
                        scaleID: 'y',
                        value: <?php $_GET['act']='rerata'; $_GET['jenis']='1'; 
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
                        ?>,
                        borderColor: 'red',
                        borderWidth: 2,
                        borderDash: [5],
                        label: {
                            display: true,
                            position: 'end',
                            content: 'Rata-rata : '+<?php $_GET['act']='rerata'; $_GET['jenis']='1'; 
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
                            ?>+"%"
                        }
                    }]
                }
            }
        }
    });
    </script>                    
    </body>
    
    </html>