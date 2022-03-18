<<<<<<< HEAD
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
            $getMKQuery = "SELECT jumlah_mk from mk where id_prodi = ".$prodi['id_prodi']." AND id_ta = ".$_GET['aka'];
            $getMK = $con->query($getMKQuery);
            $getRPSQuery = "SELECT COUNT(id) as 'rps' from dokumen where jenis = 0 AND ta = ".$_GET['aka']." AND prodi = ".$prodi['id_prodi'];
            $getRPS = $con->query($getRPSQuery);
            $getCapaianQuery = "SELECT COUNT(dokumen.id) as 'COUNT(id)', mk.jumlah_mk FROM dokumen join mk on dokumen.prodi = mk.id_prodi where dokumen.prodi = ".$prodi['id_prodi']." AND  dokumen.jenis = 0 AND dokumen.ta = ".$_GET['aka'];
            $getCapaian = $con->query($getCapaianQuery);
            
            $mk = $getMK->fetch_assoc();
            $rps = $getRPS->fetch_assoc();
            $capai = $getCapaian->fetch_assoc();

            if(isset($mk['jumlah_mk'])){

            $capaian;
            if($capai['jumlah_mk'] == 0){
                $capaian = 0;
            } else {
                $capaian = $capai['COUNT(id)']/$capai['jumlah_mk']*100;
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
                echo '<div class="text-center" style="font-size: 14pt; color: red;">Data tidak tersedia.</div>';
                break;
            }
        } 
        } ?>
        </table>
        <?php
    }
=======
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
            $getMKQuery = "SELECT jumlah_mk from mk where id_prodi = ".$prodi['id_prodi']." AND id_ta = ".$_GET['aka'];
            $getMK = $con->query($getMKQuery);
            $getRPSQuery = "SELECT COUNT(id) as 'rps' from dokumen where jenis = 0 AND ta = ".$_GET['aka']." AND prodi = ".$prodi['id_prodi'];
            $getRPS = $con->query($getRPSQuery);
            $getCapaianQuery = "SELECT COUNT(dokumen.id) as 'COUNT(id)', mk.jumlah_mk FROM dokumen join mk on dokumen.prodi = mk.id_prodi where dokumen.prodi = ".$prodi['id_prodi']." AND  dokumen.jenis = 0 AND dokumen.ta = ".$_GET['aka'];
            $getCapaian = $con->query($getCapaianQuery);
            
            $mk = $getMK->fetch_assoc();
            $rps = $getRPS->fetch_assoc();
            $capai = $getCapaian->fetch_assoc();

            if(isset($mk['jumlah_mk'])){

            $capaian;
            if($capai['jumlah_mk'] == 0){
                $capaian = 0;
            } else {
                $capaian = $capai['COUNT(id)']/$capai['jumlah_mk']*100;
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
                echo "Data tidak tersedia.";
                break;
            }
        } 
        } ?>
        </table>
        <?php
    }
>>>>>>> 0d09c24a2cebc0929bca2c139ae87b67ca10d5ea
    ?>