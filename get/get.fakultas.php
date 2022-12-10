<?php
// start get fakultas
$getFakQuery = "SELECT * FROM fakultas";
$getFak = $con->query($getFakQuery);
if($getFak->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    if(mysqli_num_rows($getFak)>0) { 
        while ($data = mysqli_fetch_array($getFak)) {
            ?>
            <option value="<?php echo $data['id_fakultas']; ?>"><?php echo $data['fakultas']; ?></option>
            <?php }
        } ?>
        </table>
        <?php
    }
    // end fakultas
    ?>