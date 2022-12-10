<?php
$getFakultasSQL = "SELECT * from fakultas";
$getFakultas = $con->query($getFakultasSQL);

if($getFakultas->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    if(mysqli_num_rows($getFakultas)>0) {
        $i = 1;
        while ($fakultas = mysqli_fetch_array($getFakultas)) {
            $sql = "SELECT COUNT(id) as dokumen FROM dokumen where fakultas = ".$fakultas['id_fakultas'];
            $query = $con->query($sql)->fetch_assoc();
            $sql2 = "SELECT COUNT(id_prodi) as prodi FROM prodi where id_fakultas = ".$fakultas['id_fakultas'];
            $query2 = $con->query($sql2)->fetch_assoc();
            ?>
            <tr>
            <td class="text-center"><?php echo $i; ?></td>
            <td><?php echo $fakultas['fakultas'];?></td>
            <td><a href="mailto:<?php echo $fakultas['email'];?>" target="_BLANK" style="text-decoration: none; color:black;"><?php echo $fakultas['email'];?></a></td>
            <td><?php echo $query2['prodi']; ?></td>
            <td>
            <div id="aksi" class="d-flex justify-content-center container">
			<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" class="aksi" href="<?php echo $siteurl; ?>admin/fakultas/detail/?id=<?php echo $fakultas['id_fakultas']; ?>"><img src="<?php echo $siteurl; ?>assets/img/show.png"></a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" data-bs-toggle="modal" onclick="edit('<?php echo $fakultas['id_fakultas']; ?>', '<?php echo $fakultas['fakultas']; ?>', '<?php echo $fakultas['email']; ?>')" data-bs-target="#edit-modal" class="aksi" href="#"><img src="<?php echo $siteurl; ?>assets/img/edit.png"></a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" onclick="del(<?php echo $fakultas['id_fakultas']; ?>)" class="aksi" href="#"><img src="<?php echo $siteurl; ?>assets/img/delete.png" <?php if($query['dokumen'] == 0){} else {echo 'hidden';} ?>></a>
			</div>
			</div>
			</div>
            </td>
            </tr>
            <?php
            $i++;
        } 
    }else {
        echo '<div class="text-center" style="font-size: 14pt; color: red;">Data tidak tersedia.</div>';
        echo '<a href="<?php echo $siteurl; ?>admin/add-dosen/" class="btn btn-outline-success" target="_SELF">Tambah Dosen</a>';
    }
    
} ?>