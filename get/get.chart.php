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
          $_GET['ta']=$_GET['aka'];
          include('get.dashboard.data.php');
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
      include('get.dashboard.label.php');
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
            value: <?php $_GET['act']='rerata'; $_GET['jenis']='1'; $_GET['ta']=$_GET['aka']; include('get.dashboard.data.php'); ?>,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [5],
            label: {
              display: true,
              position: 'end',
              content: 'Rata-rata : '+<?php $_GET['act']='rerata'; $_GET['jenis']='1'; $_GET['ta']=$_GET['aka']; include('get.dashboard.data.php'); ?>+"%"
            }
          }]
        }
      }
    }
  });
  </script>