<?php
require_once('../master.php');

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
<h4 style="margin-bottom: 25px; color:black;">Lampiran 1. Capaian RPS Semester <?php echo $_GET['t']; ?> (Data per tanggal <?php echo date_format(date_create('now'), 'd-m-Y'); ?>)</h4>
<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Grafik Capaian RPS Tahun Akademik <?php echo $_GET['t']; ?> (dalam %)</h2>
</div>
<canvas class="my-4 w-100" id="grafik" aria-label="grafik" role="img"></canvas>

<div class="table-container">
<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Tabel Capaian RPS Tahun Akademik <?php echo $_GET['t']; ?></h2>
</div>
<div class="table-responsive">
<table class="table table-striped table-hover" id="dashboard-table">
<thead>
<tr>
<th class="text-center" scope="col">No.</th>
<th scope="col">Program Studi</th>
<th class="text-center" scope="col">MK Non-MKWU</th>
<th class="text-center" scope="col">RPS Non-MKWU</th>
<th class="text-center" scope="col">Capaian</th>
</tr>
</thead>
<tbody>
<?php
$_GET['aka'] = $_GET['ta'];
include('../get/get.dashboard.table.php');
?>
</tbody>
</table>
</div>
</div>
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
<div id="chartz">
<?php 
$_GET['aka'] = $_GET['ta'];
include('../get/get.chart.php'); 
?>
</div>
<script>
var id = 'dashboard-table';
var n = 4;
var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
table = document.getElementById(id);
switching = true;
//Set the sorting direction to ascending:
dir = "desc";
/*Make a loop that will continue until
no switching has been done:*/
while (switching) {
    //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
                based on the direction, asc or desc:*/
                if (n == 0) {
                    if (dir == "asc") {
                        if (Number(x.innerHTML) > Number(y.innerHTML)) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (Number(x.innerHTML) < Number(y.innerHTML)) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                } else {
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                                shouldSwitch = true;
                                break;
                            }
                        } else if (dir == "desc") {
                            if (id == 'dashboard-table') {
                                if (parseInt(x.innerHTML) < parseInt(y.innerHTML)) {
                                    //if so, mark as a switch and break the loop:
                                        shouldSwitch = true;
                                        break;
                                    }
                                } else {
                                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                        //if so, mark as a switch and break the loop:
                                            shouldSwitch = true;
                                            break;
                                        }
                                    }
                                }
                            }
                        }
                        if (shouldSwitch) {
                            /*If a switch has been marked, make the switch
                            and mark that a switch has been done:*/
                            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                            switching = true;
                            //Each time a switch is done, increase this count by 1:
                                switchcount++;
                            } else {
                                /*If no switching has been done AND the direction is "asc",
                                set the direction to "desc" and run the while loop again.*/
                                if (switchcount == 0 && dir == "asc") {
                                    dir = "desc";
                                    switching = true;
                                }
                            }
                            
                        }
                        
                        </script>
                        <script>
                        $(document).ready(function(){
                            (function() {
                                var a = document.getElementById("dashboard-table").querySelectorAll(".ranked");
                                for(var b = 0; b < 29; b++){
                                    a[b].innerHTML = b+1;
                                }
                            })()
                        });
                        </script>
                        <script>
                            $(document).ready(function(){
                                setTimeout(function(){
                                    window.print();
                                }, 1500)
                            });
                        </script>
                        
                        </body>
                        
                        </html>