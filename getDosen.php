<?php
// start get fakultas
require_once('master.php');
$getFakQuery = "SELECT * FROM dosen ORDER BY nama ASC";
$getFak = $con->query($getFakQuery);
if($getFak->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    if(mysqli_num_rows($getFak)>0) { 
        while ($data = mysqli_fetch_array($getFak)) {
            ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
            <?php }
        } ?>
        </table>
        <?php
    }
    // end fakultas
    ?>