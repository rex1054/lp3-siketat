<?php
require_once('../master.php');

$getProdiQuery = "SELECT id_prodi, prodi from prodi where primer = 1";
$getProdi = $con->query($getProdiQuery);

if($getProdi->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    if(mysqli_num_rows($getProdi)>0) { 
        while ($prodi = mysqli_fetch_array($getProdi)) {
            $getMKQuery = "SELECT jumlah_mk from mk where id_prodi = ".$prodi['id_prodi']." AND id_ta = ".$_GET['ta'];
            $getMK = $con->query($getMKQuery);
            $getRPSQuery = "SELECT COUNT(id) as 'rps' from dokumen where jenis = 1 AND ta = ".$_GET['ta']." AND prodi = ".$prodi['id_prodi'];
            $getRPS = $con->query($getRPSQuery);
            
            $mk = $getMK->fetch_assoc();
            $rps = $getRPS->fetch_assoc();

            if(isset($mk['jumlah_mk'])){

            $capaian;
            if($mk['jumlah_mk'] == 0 || $rps['rps'] == 0){
                $capaian = 0;
            } else {
                $capaian = $rps['rps'] / $mk['jumlah_mk'] *100;
            }
            
            
            ?>
            <tr>
            <td class="ranked text-center"></td>
            <td><?php echo $prodi['prodi']; ?></td>
            <td class="text-center"><?php echo $mk['jumlah_mk']; ?></td>
            <td class="text-center"><?php echo $rps['rps']; ?></td>
            <td class="text-center"><?php echo round($capaian,2)."%"; ?></td>
            </tr>
            <?php
            } else {
                // echo '<div class="text-center" style="font-size: 14pt; color: red;">Data tidak tersedia.</div>';
                // break;
            }
        } 
        } ?>
        </table>
        <?php
    }
    ?>