<?php
require_once('../config.php');
$sql = "SELECT * FROM dosen";
$query = $con->query($sql);
if($query->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    ?>
    <table id="tabel-rank" class="table table-striped table-hover" cellpadding="5" cellspacing="0">
    <thead>
    <th class="table-sort text-center">No.</th>
    <th class="table-sort">Nama</th>
    <th class="table-sort text-center">NIDN / NIP</th>
    <th class="table-sort text-center">Jumlah Dokumen</th>
    </thead>
    <tbody>
    <?php if(mysqli_num_rows($query)>0) { ?>
        <?php
        while ($data = mysqli_fetch_array($query)) {
            $sql2 = "SELECT COUNT(penyusun.id) AS jmldokumen FROM dokumen
            JOIN penyusun on penyusun.id_dokumen = dokumen.id
            WHERE penyusun.id_dosen = ".$data['id']." AND dokumen.ta = ".$_GET['ta'];
            $query2 = $con->query($sql2);
            $dokumen = $query2->fetch_assoc();
            ?>
            <tr>
            <td class="ranked text-center"></td>
            <td><?php echo $data["nama"];?></td>
            <td class="text-center"><?php echo $data["npk"];?></td>
            <td class="text-center"><?php echo $dokumen["jmldokumen"];?></td>
            </tr>
            <?php }
        }
        ?>
        </tbody>
        </table>
        <?php
    }
    ?>