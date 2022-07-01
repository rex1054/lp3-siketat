<?php
require_once('master.php');

$sql = "SELECT dokumen.tanggal, dokumen.id, ta.ta, jenis.jenis, fakultas.fakultas, prodi.prodi, dokumen.mk from dokumen join jenis on dokumen.jenis = jenis.id_jenis join fakultas on dokumen.fakultas = fakultas.id_fakultas join prodi on dokumen.prodi = prodi.id_prodi join ta on dokumen.ta = ta.id_ta ORDER BY dokumen.id DESC";
$sql2 = "SELECT * FROM fakultas";
$sql3 = "SELECT * FROM prodi";
$sql4 = "SELECT * FROM ta ORDER BY id_ta DESC";

if(isset($_GET['filta'])) {
	$sql = "SELECT dokumen.tanggal, dokumen.id, ta.ta, jenis.jenis, fakultas.fakultas, prodi.prodi, dokumen.mk from dokumen join jenis on dokumen.jenis = jenis.id_jenis join fakultas on dokumen.fakultas = fakultas.id_fakultas join prodi on dokumen.prodi = prodi.id_prodi join ta on dokumen.ta = ta.id_ta WHERE dokumen.ta = ".$_GET['filta']." AND dokumen.prodi = ".$_GET['filpro']." ORDER BY dokumen.id DESC";
}

$query = $con->query($sql);
$query2 = $con->query($sql2);
$query3 = $con->query($sql3);
$query4 = $con->query($sql4);

?>
<div class="filtersearch nav justify-content-center">
<!-- start filter  button -->
<a href="#" id="filter-bt" class="filtersearchbtn btn btn-outline-primary" onclick="secshow('filtersec', 'filter-bt')">Filter</a>
<!-- end filter  button -->

<!-- start reset button -->
<a href="#" id="rest-bt" class="filtersearchbtn btn btn-outline-primary" onclick="backFunc()">Reset Filter</a>
<!-- end reset button -->
</div>

<!-- start filter section -->
<div class="filter-section hide-section text-center" id="filtersec">
<form action="<?php echo $siteurl; ?>" method="get">
<!-- start filter TA -->
<select type="select" class="lp3-filter " id="sta" name="filta" required>
<option selected disabled value="">Pilih Tahun Akademik</option>
<?php 
while($ta = mysqli_fetch_array($query4)){
	?>
	<option value="<?php echo $ta['id_ta']; ?>"><?php echo $ta['ta']; ?></option>
	<?php
}
?>
</select>
<!-- end filter TA -->

<!-- start filter fakultas -->
<select type="select" class="lp3-filter" id="fak" name="filfak" onchange="fetch_select(this.value, 'prod')" required>
<option selected disabled value="">Pilih Fakultas</option>
<?php 
while($fakultas = mysqli_fetch_array($query2)){
	?>
	<option value="<?php echo $fakultas['id_fakultas']; ?>"><?php echo $fakultas['fakultas']; ?></option>
	<?php
}
?>
</select>
<!-- end filter fakultas -->

<!-- start filter prodi -->
<select type="select" class="lp3-filter" id="prod" name="filpro" required>
<option selected disabled value="">Pilih Fakultas Terlebih Dahulu</option>
</select>
<!-- end filter prodi -->

<button type="submit" class="btn btn-primary">Terapkan</button>
</form>
</div>
<!-- end filter section -->

<?php

if($query->num_rows == 0) {
	echo "Tidak ada data untuk ditampilkan.";
}
else {
	?>
	<div class="container" id="main-table">
	<br/><h2>Jumlah Dokumen : <?php echo $query->num_rows; ?></h2><br/>
	<table id="tabel-dokumen" class="table table-striped table-hover" cellpadding="5" cellspacing="0">
	<thead>
	<th class="table-sort text-center" onclick="sortTable('tabel-dokumen',0)">Id</th>
	<th class="table-sort text-center" onclick="sortTable('tabel-dokumen',1)">Tahun Akademik</th>
	<th class="table-sort text-center" onclick="sortTable('tabel-dokumen',2)">Jenis</th>
	<th class="table-sort" onclick="sortTable('tabel-dokumen',3)">Dokumen</th>
	<th class="table-sort" onclick="sortTable('tabel-dokumen',4)">Fakultas</th>
	<th class="table-sort" onclick="sortTable('tabel-dokumen',5)">Prodi</th>
	<th class="table-sort" onclick="sortTable('tabel-dokumen',6)">Penyusun / Ketua Penyusun</th>
	<th class="table-sort text-center">Tanggal</th>
	<th class="text-center">Aksi</th>
	</thead>
	<tbody id="tabel-dokumen-body">
	<?php if(mysqli_num_rows($query)>0) { ?>
		<?php
		while ($data = mysqli_fetch_array($query)) {
			setlocale(LC_ALL, 'ID');
			$xTgl = date_create($data['tanggal']);
			$yTgl = date_format($xTgl, 'Y-m-d h:i:sA');
			$tgl = strftime('%e %B %Y', strtotime($yTgl));
			$penyusunQuery = "SELECT penyusun.id, dosen.nama FROM penyusun join dosen on penyusun.id_dosen = dosen.id where id_dokumen = ".$data['id']." limit 1";
			$penyusun = $con->query($penyusunQuery)->fetch_assoc();
			?>
			<tr>
			<td><?php echo $data["id"];?></td>
			<td><?php echo $data["ta"];?></td>
			<td><?php echo $data["jenis"];?></td>
			<td><?php echo $data["mk"];?></td>
			<td><?php echo $data["fakultas"];?></td>
			<td><?php echo $data["prodi"];?></td>
			<td><?php echo $penyusun['nama'];?></td>
			<td><?php echo $tgl;?></td>
			<td>
			<div id="aksi" class="container">
			<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" class="aksi" href="preview/?id=<?php echo $data['id']; ?>&mk=<?php echo $data['mk']; ?>&author=<?php echo $penyusun['nama']; ?>"><img src="assets/show.png"></a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" class="aksi" href="edit/?act=dokumen&id=<?php echo $data['id']; ?>"><img src="assets/edit.png"></a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<a target="_self" class="aksi" href="#" onclick="delet(<?php echo $data['id']; ?>)"><img src="assets/delete.png"></a>
			</div>
			</div>
			</div>
			</td>
			</tr>
			<?php }
		} ?>
		</tbody>
		</table>
		</div>
		<div class="col-md-12 text-center">
		<ul class="pagination pagination-lg pager" id="myPager"></ul>
		</div>
		<?php
	}
	?>