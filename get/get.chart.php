<?php
require_once('../master.php');
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
  var ctx = document.getElementById('myChart');
  
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        <?php
        include('get.dashboard.label.php');
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
              $_GET['ta']=$_GET['aka'];
              include('get.dashboard.data.php');
              if($i == count($prodi)) {}
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
            value: <?php $_GET['act']='rerata'; $_GET['jenis']='1'; $_GET['ta']=$_GET['aka']; include('get.dashboard.data.php'); ?>,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [5],
            label: {
              enabled: true,
              position: 'right',
              content: 'Rata-rata : '+<?php $_GET['act']='rerata'; $_GET['jenis']='1'; $_GET['ta']=$_GET['aka']; include('get.dashboard.data.php'); ?>+"%"
            }
          }]
        }
      }
    })
  }
  
  charts();
  </script>