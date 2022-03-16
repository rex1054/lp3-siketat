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
            $prodi = array(10,13,14,15,16,17,19,20,22,24,25,27,29,31,33,35,37,39,41,43,45,46,47,49,51,54,56,57);
            for($i = 0; $i < count($prodi); $i++){
              $_GET['id_pro']=$prodi[$i];
              $_GET['jenis']='0';
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
            value: <?php $_GET['act']='rerata'; $_GET['jenis']='0'; $_GET['ta']=$_GET['aka']; include('get.dashboard.data.php'); ?>,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [5],
            label: {
              enabled: true,
              position: 'right',
              content: 'Rata-rata : '+<?php $_GET['act']='rerata'; $_GET['jenis']='0'; $_GET['ta']=$_GET['aka']; include('get.dashboard.data.php'); ?>+"%"
            }
          }]
        }
      }
    })
  }

  charts();
  </script>