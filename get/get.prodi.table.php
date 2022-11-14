<?php
require_once('../../config.php');

$getProdiSQL = "SELECT prodi.id_prodi, fakultas.fakultas, prodi.prodi, prodi.email, prodi.primer, prodi.nick from prodi join fakultas on prodi.id_fakultas = fakultas.id_fakultas WHERE prodi.id_fakultas = ".$_GET['id'];
$getProdi = $con->query($getProdiSQL);

if($getProdi->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    if(mysqli_num_rows($getProdi)>0) {
        $i = 1;
        while ($prodi = mysqli_fetch_array($getProdi)) {
            $sql = "SELECT COUNT(id) as dokumen FROM dokumen where prodi = ".$prodi['id_prodi'];
            $query = $con->query($sql)->fetch_assoc();
            ?>
            <tr>
            <td class="text-center"><?php echo $i; ?></td>
            <td><?php echo $prodi['fakultas'];?></td>
            <td><?php echo $prodi['prodi'];?></td>
            <td><a href="mailto:<?php echo $prodi['email'];?>" target="_BLANK" style="text-decoration: none; color:black;"><?php echo $prodi['email'];?></a></td>
            <td>
            <div id="aksi" class="d-flex justify-content-center container">
			<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" class="aksi" href="<?php echo $siteurl; ?>prodi/?id=<?php echo $prodi['id_prodi']; ?>"><img src="<?php echo $siteurl; ?>assets/show.png"></a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" data-bs-toggle="modal" onclick="pedit('<?php echo $prodi['id_prodi']; ?>', '<?php echo $prodi['prodi']; ?>', '<?php echo $prodi['email']; ?>', '<?php echo $prodi['primer']; ?>')" data-bs-target="#edit-modal" class="aksi" href="#"><img src="<?php echo $siteurl; ?>assets/edit.png"></a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" onclick="dele(<?php echo $prodi['id_prodi']; ?>)" class="aksi" href="#"><img src="<?php echo $siteurl; ?>assets/delete.png" <?php if($query['dokumen'] == 0){} else {echo 'hidden';} ?>></a>
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
        echo '<a href="<?php echo $siteurl; ?>add-dosen/" class="btn btn-outline-success" target="_SELF">Tambah Dosen</a>';
    }
    
} ?>