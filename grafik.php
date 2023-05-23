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
function charts() {
    'use strict'
    
    feather.replace({ 'aria-hidden': 'true' });
    
    // Graphs
    var ctx = document.getElementById('grafik');
    
    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                <?php
                include('get/get.grafik.label.php');
                ?>
            ],
            datasets: [
                {
                    label: 'RPS',
                    data: [
                        <?php 
                        $_GET['act']='prodi';
                        for($i = 0; $i < count($prodi); $i++){
                            $_GET['id_pro']=$prodi[$i];
                            $_GET['jenis']='1';
                            $_GET['ta']=$_GET['ta'];
                            include('get/get.grafik.data.php');
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
                }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {
                    display: false
                },
                annotation: {
                    annotations: [{
                        id: 'a-line-1',
                        type: 'line',
                        mode: 'horizontal',
                        scaleID: 'y-axis-0',
                        value: <?php $_GET['act']='rerata'; $_GET['jenis']='1'; $_GET['ta']=$_GET['ta']; include('get/get.grafik.data.php'); ?>,
                        borderColor: 'red',
                        borderWidth: 2,
                        borderDash: [5],
                        label: {
                            enabled: true,
                            position: 'right',
                            content: 'Rata-rata : '+<?php $_GET['act']='rerata'; $_GET['jenis']='1'; $_GET['ta']=$_GET['ta']; include('get/get.grafik.data.php'); ?>+"%"
                        }
                    }]
                }
            }
        })
    }
    
    charts();
    </script>                      
    </body>
    
    </html>