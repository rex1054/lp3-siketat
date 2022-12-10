<?php
include('../config.php');
require('../master.php');
$getDataQuery = "SELECT * FROM dosen where id = ".$_GET['id'];
$getInfo = $con->query($getDataQuery);
$hasil = $getInfo->fetch_assoc();
if($getInfo->num_rows == 0) {
    
} else {
    ?>
    <h1 style="text-align: center;"> Ubah Data Dosen</h1>
    
    <form action="<?php echo $siteurl; ?>edit/save/?act=dosen&id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
    <!-- start nama section -->
    <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" value="<?php echo $hasil['nama']; ?>" name="nama" required placeholder="Nama Dosen" aria-describedby="nama">
    </div>
    <!-- end nama section -->
    
    <!-- start NPK / NIP section -->
    <div class="mb-3">
    <label for="npk" class="form-label">NIDN / NIP</label>
    <input type="text" class="form-control" id="npk" value="<?php echo $hasil['npk']; ?>" name="npk" placeholder="NIDN / NIP" aria-describedby="nidn / nip">
    </div>
    <!-- end NPK / NIP section -->
    
    <!-- start submit button -->
    <button type="submit" class="btn btn-primary">Simpan</button>
    <!-- end submit button -->
    <!-- start back button -->
    <a class="btn btn-danger" href="<?php echo $siteurl; ?>" target="_self">Kembali</a>
    <!-- end back button -->
    </form>
    <?php
}
?>