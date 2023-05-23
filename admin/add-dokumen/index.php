<form action="add-dokumen/add.php" method="POST" enctype="multipart/form-data">
<!-- start jenis dokumen section -->
<div class="mb-3">
<label for="jenis-dokumen" class="form-label">Jenis Dokumen</label>
<select class="form-select" id="jenis-dokumen" name="jenis-dokumen" required onchange="checkin(this.value);" aria-label="pilih jenis dokumen">
<option selected disabled value="">Pilih Jenis Dokumen</option>
<option value="1">RPS</option>
<option value="2">Modul</option>
<option value="3">Buku Ajar</option>
<option value="4">Pedoman</option>
<option value="5">Petunjuk Praktikum</option>
<option value="6">RPS MKWU</option>
<option value="7">Modul MKWU</option>
<option value="8">Buku Ajar MKWU</option>
<option value="9">Pedoman MKWU</option>
<option value="10">Petunjuk Praktikum MKWU</option>
</select>
</div>
<!-- end jenis dokumen section -->

<!-- start modul section -->
<div class="mb-3">
    <label for="modul" class="form-label">Nama Praktikum</label>
    <input type="text" class="form-control" id="modul" value="" disabled name="modul" required placeholder="Khusus dokumen modul" aria-describedby="modul">
  </div>
<!-- end modul section -->

<!-- start tahun akademik section -->
<div class="mb-3">
<label for="tahun-akademik" class="form-label">Tahun Akademik</label>
<select class="form-select pilihan" id="tahun-akademik" name="tahun-akademik" required aria-label="pilih tahun akademik">
<option selected disabled value="">Pilih Tahun Akademik</option>
<?php
$_GET['src'] = 'add';
include('../get/get.ta.php');
?>
</select>
</div>
<!-- end tahun akademik section -->

<!-- start fakultas section -->
<div class="mb-3">
<label for="fakultas" class="form-label">Fakultas</label>
<select class="form-select pilihan" id="fakultas" name="fakultas" required onchange="fetch_slc(this.value, 'prodi');" aria-label="pilih fakultas">
<option value="" selected disabled>Pilih Fakultas</option>
<?php 
$_GET['src'] = 'add';
include('../get/get.fakultas.php');
?>
</select>
</div>
<!-- end fakultas section -->

<!-- start prodi section -->
<div class="mb-3">
<label for="prodi" class="form-label">Prodi</label>
<select class="form-select pilihan" id="prodi" name="prodi" required aria-label="pilih prodi">
<option selected disabled value="">Pilih Fakultas Terlebih Dahulu</option>
</select>
</div>
<!-- end prodi section -->

<!-- start mk section -->
<div class="mb-3">
    <label for="matakuliah" class="form-label">Mata Kuliah</label>
    <input type="text" class="form-control" id="matakuliah" name="matakuliah" required placeholder="Nama Mata Kuliah / Nama Dokumen" aria-describedby="mata kuliah">
  </div>
<!-- end mk section -->

<!-- start kode mk section -->
<div class="mb-3">
    <label for="kode-matakuliah" class="form-label">Kode Mata Kuliah</label>
    <input type="text" class="form-control" id="kode-matakuliah" name="kode-matakuliah" required placeholder="Kode Mata Kuliah" aria-describedby="kode mata kuliah">
  </div>
<!-- end kode mk section -->

<!-- start penyusun section -->
<div class="mb-3">
    <label for="penyusun" class="form-label">Nama Penyusun</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun1" name="penyusun1" required aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
<div class="mb-3 hiden">
    <label for="penyusun" class="form-label">Nama Penyusun 2</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun2" name="penyusun2" aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
<div class="mb-3 hiden">
    <label for="penyusun" class="form-label">Nama Penyusun 3</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun3" name="penyusun3" aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
<div class="mb-3 hiden">
    <label for="penyusun" class="form-label">Nama Penyusun 4</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun4" name="penyusun4" aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
<div class="mb-3 hiden">
    <label for="penyusun" class="form-label">Nama Penyusun 5</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun5" name="penyusun5" aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
<div class="mb-3 hiden">
    <label for="penyusun" class="form-label">Nama Penyusun 6</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun6" name="penyusun6" aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
<div class="mb-3 hiden">
    <label for="penyusun" class="form-label">Nama Penyusun 7</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun7" name="penyusun7" aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
<div class="mb-3 hiden">
    <label for="penyusun" class="form-label">Nama Penyusun 8</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun8" name="penyusun8" aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
<div class="mb-3 hiden">
    <label for="penyusun" class="form-label">Nama Penyusun 9</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun9" name="penyusun9" aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
<div class="mb-3 hiden">
    <label for="penyusun" class="form-label">Nama Penyusun 10</label>
    <select class="form-select lp3-penyusun pilihan" id="penyusun10" name="penyusun10" aria-label="pilih penyusun">
    <option value="" selected disabled>Pilih Dosen</option>
      <?php
      $_GET['src'] = 'add';
      include('../get/get.dosen.php');
      ?>
    </select>
  </div>
  
  <div class="mb-3">
  <span class="tambah-penyusun" id="tambah-penyusun" onclick="addPenyusun(2)">+ tambah penyusun</span>
  </div>
<!-- end penyusun section -->

<!-- start kode dokumen section -->
<div class="mb-3">
    <label for="kode-dokumen" class="form-label">Kode Dokumen</label>
    <input type="text" class="form-control" id="kode-dokumen" name="kode-dokumen" required placeholder="Kode Dokumen" aria-describedby="kode dokumen">
  </div>
<!-- end kode dokumen section -->

<!-- start tanggal section -->
<div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal Diterima</label>
    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Diterima" required aria-describedby="pilih tanggal">
  </div>
<!-- end tanggal section -->

<!-- start submit button -->
<button type="submit" class="btn btn-primary">Simpan</button>
<!-- end submit button -->
</form>