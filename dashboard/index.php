<main class="col-sm-12 col-md-12 col-lg-12">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Dashboard</h1>
<div class="btn-toolbar mb-2 mb-md-0">
<div class="btn-group me-2">
<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
</div>
<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
<span data-feather="calendar"></span>
This week
</button>
</div>
</div>

<div class="col-sm-12 col-md-12 col-xl-12 text-center">
<h2 style="font-size: 16pt;">Capaian RPS (dalam %)</h2 style="font-size: 16pt;">
</div>
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

<h2>Capaian RPS Semester Genap TA 2021-2022</h2>
<div class="table-responsive">
<table class="table table-striped table-hover" id="dashboard-table">
<thead>
<tr>
<th scope="col">No.</th>
<th scope="col">Prodi</th>
<th scope="col">MK Non-MKWU</th>
<th scope="col">RPS Non-MKWU</th>
<th scope="col">Capaian</th>
</tr>
</thead>
<tbody>
<?php
include('get/get.dashboard.table.php');
?>
</tbody>
</table>
</div>
</main>