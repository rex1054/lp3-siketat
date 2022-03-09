<?php
require_once('master.php');
$sql = "SELECT * FROM dosen";
$query = $con->query($sql);
if($query->num_rows == 0) {
	echo "Tidak ada data untuk ditampilkan.";
}
else {
	?>
    <!-- start search section -->
	<div class="search-section" id="searchdos">
	<!-- start search nama dosen -->
	<input type="text" class="lp3-filter" id="dose" onkeyup="dosen('dose')" placeholder="Cari Nama Dosen">
	<!-- end search nama dosen -->
	</div>
	<!-- end search section -->

	<table id="tabel-dosen" class="table table-striped table-hover" cellpadding="5" cellspacing="0">
	<tr>
	<th class="table-sort" onclick="sortTable('tabel-dosen',0)">Id</th>
	<th class="table-sort" onclick="sortTable('tabel-dosen',1)">Nama</th>
	<th class="table-sort" onclick="sortTable('tabel-dosen',2)">NPK / NIP</th>
	<th class="table-sort" onclick="sortTable('tabel-dosen',3)">Jumlah Dokumen</th>
	<th class="table-sort">Aksi</th>
	</tr>
	<?php if(mysqli_num_rows($query)>0) { ?>
		<?php
		while ($data = mysqli_fetch_array($query)) {
            $sql2 = "SELECT COUNT(id) FROM dokumen WHERE penyusun = ".$data['id'];
            $query2 = $con->query($sql2);
            $dokumen = $query2->fetch_assoc();
			?>
			<tr>
			<td><?php echo $data["id"];?></td>
			<td><?php echo $data["nama"];?></td>
			<td><?php echo $data["npk"];?></td>
			<td><?php echo $dokumen["COUNT(id)"];?></td>
            <td>
            <div id="aksi">
			<a target="_self" href="edit.php?act=dosen&id=<?php echo $data['id']; ?>"><img src="assets/edit.png"></a>
			</div>
            </td>
			</tr>
			<?php }
		} ?>
		</table>
        <a href="addDosen.php" class="btn btn-outline-success" target="_SELF">Tambah Dosen</a>
		<?php
	}
	?>