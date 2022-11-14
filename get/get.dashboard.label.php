<?php
require_once('../config.php');
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