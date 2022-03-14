<?php
require_once('master.php');

$getProdiQuery = "SELECT id_prodi, prodi from prodi where primer = 1";
$getProdi = $con->query($getProdiQuery);

if($getProdi->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    if(mysqli_num_rows($getProdi)>0) { 
        while ($prodi = mysqli_fetch_array($getProdi)) {
            $getMKQuery = "SELECT jumlah_mk from mk where id_prodi = ".$prodi['id_prodi'];
            $getMK = $con->query($getMKQuery);
            $getRPSQuery = "SELECT COUNT(id) as 'rps' from dokumen where jenis = 0 AND ta = 2 AND prodi = ".$prodi['id_prodi'];
            $getRPS = $con->query($getRPSQuery);
            $getCapaianQuery = "SELECT COUNT(dokumen.id) as 'COUNT(id)', mk.jumlah_mk FROM dokumen join mk on dokumen.prodi = mk.id_prodi where dokumen.prodi = ".$prodi['id_prodi']." AND  dokumen.jenis = 0 AND dokumen.ta = 2";
            $getCapaian = $con->query($getCapaianQuery);
            
            $mk = $getMK->fetch_assoc();
            $rps = $getRPS->fetch_assoc();
            $capai = $getCapaian->fetch_assoc();

            $capaian;
            if($capai['jumlah_mk'] == 0){
                $capaian = 0;
            } else {
                $capaian = $capai['COUNT(id)']/$capai['jumlah_mk']*100;
            }
            
            
            ?>
            <tr>
            <td class="ranked"></td>
            <td><?php echo $prodi['prodi']; ?></td>
            <td><?php echo $mk['jumlah_mk']; ?></td>
            <td><?php echo $rps['rps']; ?></td>
            <td><?php echo round($capaian,2)."%"; ?></td>
            </tr>
            <?php
            }
        } ?>
        </table>
        <?php
    }
    ?>