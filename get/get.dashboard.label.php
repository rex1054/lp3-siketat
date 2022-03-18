<<<<<<< HEAD
<?php
require('../master.php');
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
=======
<?php
require('../master.php');
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
>>>>>>> 0d09c24a2cebc0929bca2c139ae87b67ca10d5ea
?>