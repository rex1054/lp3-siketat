<?php
require_once('master.php');
$sql = "SELECT dokumen.tanggal, dokumen.id, ta.ta, jenis.jenis, fakultas.fakultas, prodi.prodi, dokumen.mk, dosen.nama from dokumen join jenis on dokumen.jenis = jenis.id_jenis join fakultas on dokumen.fakultas = fakultas.id_fakultas join prodi on dokumen.prodi = prodi.id_prodi join ta on dokumen.ta = ta.id_ta join dosen on dokumen.penyusun = dosen.id ORDER BY dokumen.id DESC";
$sql2 = "SELECT * FROM fakultas";
$sql3 = "SELECT * FROM prodi";
$sql4 = "SELECT * FROM ta ORDER BY id_ta DESC";
$query = $con->query($sql);
$query2 = $con->query($sql2);
$query3 = $con->query($sql3);
$query4 = $con->query($sql4);
if($query->num_rows == 0) {
	echo "Tidak ada data untuk ditampilkan.";
}
else {
	?>
	<div class="filtersearch nav justify-content-center">
	<!-- start filter  button -->
	<a href="#" id="filter-bt" class="filtersearchbtn btn btn-outline-primary" onclick="secshow('filtersec', 'filter-bt')">Filter</a>
	<!-- end filter  button -->
	
	<!-- start search button -->
	<a href="#" id="search-bt" class="filtersearchbtn btn btn-outline-primary" onclick="secshow('searchsec', 'search-bt')">Pencarian</a>
	<!-- end search button -->
	
	<!-- start reset button -->
	<a href="#" id="rest-bt" class="filtersearchbtn btn btn-outline-primary" onclick="backFunc()">Reset Filter</a>
	<!-- end reset button -->
	</div>
	
	<!-- start filter section -->
	<div class="filter-section hide-section" id="filtersec">
	<!-- start filter TA -->
	<select type="select" class="lp3-filter " id="sta" onchange="filt('sta', 1, 0)">
	<option selected disabled value="">Pilih Tahun Akademik</option>
	<?php 
	while($ta = mysqli_fetch_array($query4)){
		?>
		<option value="<?php echo $ta['ta']; ?>"><?php echo $ta['ta']; ?></option>
		<?php
	}
	?>
	</select>
	<!-- end filter TA -->
	
	<!-- start filter fakultas -->
	<select type="select" class="lp3-filter" id="fak" onchange="filt('fak', 4, 0); fetch_prodi(this.value)">
	<option selected disabled value="">Pilih Fakultas</option>
	<?php 
	while($fakultas = mysqli_fetch_array($query2)){
		?>
		<option value="<?php echo $fakultas['fakultas']; ?>"><?php echo $fakultas['fakultas']; ?></option>
		<?php
	}
	?>
	</select>
	<!-- end filter fakultas -->
	
	<!-- start filter prodi -->
	<select type="select" class="lp3-filter" id="prod" onchange="filt('prod', 5, 0)">
	<option selected disabled value="">Pilih Fakultas Terlebih Dahulu</option>
	</select>
	<!-- end filter prodi -->
	</div>
	<!-- end filter section -->
	
	<!-- start search section -->
	<div class="search-section hide-section" id="searchsec">
	<!-- start search nama dokumen -->
	<input type="text" class="lp3-filter" id="docu" onkeyup="filt('docu', 3, 1)" placeholder="Cari Nama Dokumen">
	<!-- end search nama dokumen -->
	
	<!-- start search nama dokumen -->
	<input type="text" class="lp3-filter" id="aname" onkeyup="filt('aname', 6, 1)" placeholder="Cari Nama Penyusun">
	<!-- end search nama dokumen -->
	</div>
	<!-- end search section -->
	
	<table id="tabel-member" class="table table-striped table-hover" cellpadding="5" cellspacing="0">
	<tr>
	<th class="table-sort" onclick="sortTable('tabel-member',0)">Id</th>
	<th class="table-sort" onclick="sortTable('tabel-member',1)">Tahun Akademik</th>
	<th class="table-sort" onclick="sortTable('tabel-member',2)">Jenis</th>
	<th class="table-sort" onclick="sortTable('tabel-member',3)">Dokumen</th>
	<th class="table-sort" onclick="sortTable('tabel-member',4)">Fakultas</th>
	<th class="table-sort" onclick="sortTable('tabel-member',5)">Prodi</th>
	<th class="table-sort" onclick="sortTable('tabel-member',6)">Penyusun</th>
	<th class="table-sort">Tanggal</th>
	<th>Aksi</th>
	</tr>
	<?php if(mysqli_num_rows($query)>0) { ?>
		<?php
		while ($data = mysqli_fetch_array($query)) {
			setlocale(LC_ALL, 'ID');
			$xTgl = date_create($data['tanggal']);
			$yTgl = date_format($xTgl, 'Y-m-d h:i:sA');
			$tgl = strftime('%e %B %Y', strtotime($yTgl));
			?>
			<tr>
			<td><?php echo $data["id"];?></td>
			<td><?php echo $data["ta"];?></td>
			<td><?php echo $data["jenis"];?></td>
			<td><?php echo $data["mk"];?></td>
			<td><?php echo $data["fakultas"];?></td>
			<td><?php echo $data["prodi"];?></td>
			<td><?php echo $data["nama"];?></td>
			<td><?php echo $tgl;?></td>
			<td>
			<div id="aksi">
			<a target="_self" href="preview/?id=<?php echo $data['id']; ?>&mk=<?php echo $data['mk']; ?>&author=<?php echo $data['nama']; ?>"><img src="assets/show.png"></a>
			<a target="_self" href="edit/?act=dokumen&id=<?php echo $data['id']; ?>"><img src="assets/edit.png"></a>
			<a target="_self" href="#" onclick="delet(<?php echo $data['id']; ?>)"><img src="assets/delete.png"></a>
			</div>
			</td>
			</tr>
			<?php }
		} ?>
		</table>
		<?php
	}
	?>