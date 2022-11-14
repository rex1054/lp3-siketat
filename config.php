<?php
include('info.php');
$host = "localhost";
$username = "sojy3165_lp3";
$pass = "GH.FD2WP5JdM";
$database = "sojy3165_lp3";
    
    $con = mysqli_connect($host, $username, $pass, $database);
    
    if(!$con) {
        ?>
        <script type="text/javascript">
        alert("Error 503: Service Unavailable");
        </script>
        <?php
    }
    
    $isLive = mysqli_select_db($con , $database) ;
    if(!$isLive) {
        ?>
        <script type="text/javascript">
        alert("Error 503: Service Unavailable");
        </script>
        <?php
    } 
    ?> 