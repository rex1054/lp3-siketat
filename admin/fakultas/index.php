<!-- start content -->
<main class="col-sm-12 col-md-12 col-lg-12"><br/>

<div class="table-container">
<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt; margin-bottom: 15px;">Daftar Fakultas</h2>
</div>
<div class="table-responsive">
<table class="table table-striped table-hover" id="dashboard-table">
<thead>
<tr>
<th class="text-center" scope="col">No.</th>
<th scope="col">Fakultas</th>
<th scope="col">Email</th>
<th scope="col">Jumlah Prodi</th>
<th class="text-center" scope="col">Aksi</th>
</tr>
</thead>
<tbody>
<?php
include('../get/get.fakultas.table.php');
?>
</tbody>
</table>
<button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#add-modal">Tambah Fakultas</button>
</div>

<div class="modal fade" id="add-modal">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Tambah Fakultas</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
<form action="<?php echo $siteurl; ?>admin/fakultas/add.php" method="POST" enctype="multipart/form-data">
<label for="nama-fakultas" class="form-label">Nama Fakultas</label>
<input type="text" class="form-control" id="nama-fakultas" name="nama-fakultas" required placeholder="Nama Fakultas (contoh: HUKUM)" aria-describedby="nama-fakultas"><br/>
<label for="email-fakultas" class="form-label">Email Fakultas</label>
<input type="email" class="form-control" id="email-fakultas" name="email-fakultas" placeholder="Email Fakultas (contoh: hukum@unmuhjember.ac.id)" aria-describedby="email-fakultas">
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
</div>

</div>
</div>
</div>

<div class="modal fade" id="edit-modal">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Ubah Fakultas</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
<form action="<?php echo $siteurl; ?>admin/fakultas/edit.php" method="POST" enctype="multipart/form-data">
<input type="text" id="id-fakultas" name="id-fakultas" hidden>
<label for="nama-fakultas" class="form-label">Nama Fakultas</label>
<input type="text" class="form-control" id="edit-nama-fakultas" name="edit-nama-fakultas" required placeholder="Nama Fakultas (contoh: HUKUM)" aria-describedby="nama-fakultas"><br/>
<label for="email-fakultas" class="form-label">Email Fakultas</label>
<input type="email" class="form-control" id="edit-email-fakultas" name="edit-email-fakultas" placeholder="Email Fakultas (contoh: hukum@unmuhjember.ac.id)" aria-describedby="email-fakultas">
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
</div>

</div>
</div>
</div>
</div>
</main>