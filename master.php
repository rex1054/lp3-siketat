<?php
require_once('config.php');

$con = mysqli_connect($host, $username, $pass, $db);

// start main function
if($con) {
    ?>
    
    <?php
    ;}
    else {
        ?>
        <script type="text/javascript">
        alert("Error 503: Service Unavailable");
        </script>
        <?php
        ;
    }
    
    $cekdatabase = mysqli_select_db($con , $db) ;
    if($cekdatabase) {
        ?>
        
        <?php
        ;}
        else {
            ?>
            
            <script type="text/javascript">
            alert("Error 503: Service Unavailable");
            </script>
            <?php
            ;
        } 
        //   end main function
        
?> 