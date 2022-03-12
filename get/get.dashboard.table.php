<?php
require_once('master.php');

$getdataquery1 = "SELECT * FROM fakultas";
$getdata1 = $con->query($querygetdata1);
if($getdata1->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    if(mysqli_num_rows($getdata1)>0) { 
        while ($data1 = mysqli_fetch_array($getdata1)) {
            ?>
            <option value="<?php echo $data1['id_fakultas']; ?>"><?php echo $data1['fakultas']; ?></option>
            <?php }
        } ?>
        </table>
        <?php
    }
    ?>