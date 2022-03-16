<?php
// start get fakultas
if(isset($_GET['src'])){
    require_once('master.php');
} else {
    require_once('../master.php');
}

$getFakQuery = "SELECT * FROM ta ORDER BY id_ta DESC";
$getFak = $con->query($getFakQuery);
if($getFak->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    if(mysqli_num_rows($getFak)>0) { 
        while ($data = mysqli_fetch_array($getFak)) {
            ?>
            <option id="<?php echo $data['ta']; ?>" value="<?php echo $data['id_ta']; ?>"><?php echo $data['ta']; ?></option>
            <?php }
        } ?>
        </table>
        <?php
    }
    // end fakultas
    ?>