<?php
require_once('../config.php');
if(isset($_GET['id']))
{
    $state = $_GET['id'];
    
    if($state == ''){
    }
    else {
        
        $getDataQuery = "SELECT * FROM dokumen where id = ".$state;
        $getDataQuery2 = "SELECT fakultas.fakultas FROM dokumen join fakultas on dokumen.fakultas = fakultas.id_fakultas where dokumen.id = ".$state;
        $getDataQuery3 = "SELECT prodi.prodi FROM dokumen join prodi on dokumen.prodi = prodi.id_prodi where dokumen.id = ".$state;
        $getDataQuery4 = "SELECT ta.ta FROM dokumen join ta on dokumen.ta = ta.id_ta where dokumen.id = ".$state;
        $getDataQuery5 = "SELECT * FROM dosen join penyusun on penyusun.id_dosen = dosen.id where penyusun.id_dokumen = ".$state;
        $getInfo = $con->query($getDataQuery);
        $getInfo2 = $con->query($getDataQuery2);
        $getInfo3 = $con->query($getDataQuery3);
        $getInfo4 = $con->query($getDataQuery4);
        $getInfo5 = $con->query($getDataQuery5);
        $hasil = $getInfo->fetch_assoc();
        $hasil2 = $getInfo2->fetch_assoc();
        $hasil3 = $getInfo3->fetch_assoc();
        $hasil4 = $getInfo4->fetch_assoc();
        
        if($getInfo->num_rows == 0) {
            
        } else {
            ?>
            <h1 style="text-align: center;"> Ubah Data Tanda Terima</h1>
            
            <form action="<?php echo $siteurl; ?>edit/save/?act=dokumen&id=<?php echo $state; ?>" method="POST" enctype="multipart/form-data">
            <!-- start jenis dokumen section -->
            <div class="mb-3">
            <label for="jenis-dokumen" class="form-label">Jenis Dokumen</label>
            <select class="form-select" id="jenis-dokumen" name="jenis-dokumen" required onchange="checkin(this.value);" aria-label="pilih jenis dokumen">
            <?php 
            switch($hasil['jenis']){
                case 1 :
                    ?>
                    <option value="<?php echo $hasil['jenis'];?>">RPS</option>
                    <?php
                    break;
                    case 2 :
                        ?>
                        <option value="<?php echo $hasil['jenis'];?>">Modul</option>
                        <?php
                        break;
                        case 3 :
                            ?>
                            <option value="<?php echo $hasil['jenis'];?>">Buku Ajar</option>
                            <?php
                            break;
                            case 4 :
                                ?>
                                <option value="<?php echo $hasil['jenis'];?>">Pedoman</option>
                                <?php
                                break;
                                case 5 :
                                    ?>
                                    <option value="<?php echo $hasil['jenis'];?>">Petunjuk Praktikum</option>
                                    <?php
                                    break;
                                    case 6 :
                                        ?>
                                        <option value="<?php echo $hasil['jenis'];?>">RPS MKWU</option>
                                        <?php
                                        break;
                                        case 7 :
                                            ?>
                                            <option value="<?php echo $hasil['jenis'];?>">Modul MKWU</option>
                                            <?php
                                            break;
                                            case 8 :
                                                ?>
                                                <option value="<?php echo $hasil['jenis'];?>">Buku Ajar MKWU</option>
                                                <?php
                                                break;
                                                case 9 :
                                                    ?>
                                                    <option value="<?php echo $hasil['jenis'];?>">Pedoman MKWU</option>
                                                    <?php
                                                    break;
                                                    case 10 :
                                                        ?>
                                                        <option value="<?php echo $hasil['jenis'];?>">Petunjuk Praktikum MKWU</option>
                                                        <?php
                                                        break;
                                                        default :
                                                        ?>
                                                        <option disabled value="">Pilih Jenis Dokumen</option>
                                                        <?php
                                                        break;
                                                    }
                                                    ?>
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
                                                    <?php
                                                    if($hasil['jenis']==2 || $hasil['jenis']==5 || $hasil['jenis']==7 || $hasil['jenis']==10){
                                                        ?>
                                                        <input type="text" class="form-control" id="modul" name="modul" required placeholder="Khusus dokumen Modul dan Petunjuk Praktikum" aria-describedby="modul" value="<?php echo $hasil['modul']; ?>">
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <input type="text" class="form-control" id="modul" value="" disabled name="modul" required placeholder="Khusus dokumen modul" aria-describedby="modul">
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                    </div>
                                                    <!-- end modul section -->
                                                    
                                                    <!-- start tahun akademik section -->
                                                    <div class="mb-3">
                                                    <label for="tahun-akademik" class="form-label">Tahun Akademik</label>
                                                    <select class="form-select pilihan" id="tahun-akademik" name="tahun-akademik" required aria-label="pilih tahun akademik">
                                                    <option value="<?php echo $hasil['ta']; ?>"><?php echo $hasil4['ta']; ?></option>
                                                    <?php
                                                    include('get.ta.php');
                                                    ?>
                                                    </select>
                                                    </div>
                                                    <!-- end tahun akademik section -->
                                                    
                                                    <!-- start fakultas section -->
                                                    <div class="mb-3">
                                                    <label for="fakultas" class="form-label">Fakultas</label>
                                                    <select class="form-select pilihan" id="fakultas" name="fakultas" required onchange="fetch_select(this.value);" aria-label="pilih fakultas">
                                                    <option value="<?php echo $hasil['fakultas']; ?>" selected><?php echo $hasil2['fakultas']; ?></option>
                                                    <?php 
                                                    include('get.fakultas.php');
                                                    ?>
                                                    </select>
                                                    </div>
                                                    <!-- end fakultas section -->
                                                    
                                                    <!-- start prodi section -->
                                                    <div class="mb-3">
                                                    <label for="prodi" class="form-label">Prodi</label>
                                                    <select class="form-select pilihan" id="prodi" name="prodi" required aria-label="pilih prodi">
                                                    <option selected value="<?php echo $hasil['prodi']; ?>"><?php echo $hasil3['prodi']; ?></option>
                                                    </select>
                                                    </div>
                                                    <!-- end prodi section -->
                                                    
                                                    <!-- start mk section -->
                                                    <div class="mb-3">
                                                    <label for="matakuliah" class="form-label">Mata Kuliah</label>
                                                    <input type="text" class="form-control" id="matakuliah" name="matakuliah" required placeholder="Nama Mata Kuliah / Nama Dokumen" aria-describedby="mata kuliah" value="<?php echo $hasil['mk']; ?>">
                                                    </div>
                                                    <!-- end mk section -->
                                                    
                                                    <!-- start kode mk section -->
                                                    <div class="mb-3">
                                                    <label for="kode-matakuliah" class="form-label">Kode Mata Kuliah</label>
                                                    <input type="text" class="form-control" id="kode-matakuliah" name="kode-matakuliah" required placeholder="Kode Mata Kuliah" aria-describedby="kode mata kuliah" value="<?php echo $hasil['kode_mk']; ?>">
                                                    </div>
                                                    <!-- end kode mk section -->
                                                    
                                                    <!-- start penyusun section -->
                                                    <?php
                                                    $l = 1;
                                                    while ($hasil5 = mysqli_fetch_array($getInfo5)) {
                                                        ?>
                                                        <div class="mb-3">
                                                        <label for="penyusun" class="form-label">Nama Penyusun <?php if ($l == 1){} else {echo $l;} ?></label>
                                                        <select class="form-select lp3-penyusun pilihan" id="penyusun<?php echo $l; ?>" name="penyusun<?php echo $l; ?>" <?php if ($l == 1){echo 'required';} else {} ?> aria-label="pilih penyusun">
                                                        <option value="" selected disabled><?php echo $hasil5['nama']; ?></option>
                                                        <?php
                                                        include('get.dosen.php');
                                                        ?>
                                                        </select>
                                                        </div>
                                                        <?php
                                                        $l++;
                                                    }
                                                    for($i = $l; $i < 11; $i++) {
                                                        if ($l < 10){
                                                            ?>
                                                            <div class="mb-3 hiden">
                                                            <label for="penyusun" class="form-label">Nama Penyusun <?php echo $l; ?></label>
                                                            <select class="form-select lp3-penyusun pilihan" id="penyusun<?php echo $l; ?>" name="penyusun<?php echo $l; ?>" aria-label="pilih penyusun">
                                                            <option value="" selected disabled>Pilih Dosen</option>
                                                            <?php
                                                            include('get.dosen.php');
                                                            ?>
                                                            </select>
                                                            </div>
                                                            <?php
                                                            $l++;
                                                        } else if ($l == 10){
                                                            ?>
                                                            <div class="mb-3 hiden">
                                                            <label for="penyusun" class="form-label">Nama Penyusun <?php echo '10'; ?></label>
                                                            <select class="form-select lp3-penyusun pilihan" id="penyusun<?php echo $l; ?>" name="penyusun<?php echo $l; ?>" aria-label="pilih penyusun">
                                                            <option value="" selected disabled>Pilih Dosen</option>
                                                            <?php
                                                            include('get.dosen.php');
                                                            ?>
                                                            </select>
                                                            </div>
                                                            <div class="mb-3">
                                                            <span class="tambah-penyusun" id="tambah-penyusun" onclick="addPenyusun(<?php echo $getInfo5->num_rows+1;?>)">+ tambah penyusun</span>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    <!-- end penyusun section -->
                                                    
                                                    <!-- start kode dokumen section -->
                                                    <div class="mb-3">
                                                    <label for="kode-dokumen" class="form-label">Kode Dokumen</label>
                                                    <input type="text" class="form-control" id="kode-dokumen" name="kode-dokumen" required placeholder="Kode Dokumen" aria-describedby="kode dokumen" value="<?php echo $hasil['kode_dokumen']; ?>">
                                                    </div>
                                                    <!-- end kode dokumen section -->
                                                    
                                                    <!-- start tanggal section -->
                                                    <div class="mb-3">
                                                    <label for="tanggal" class="form-label">Tanggal Diterima</label>
                                                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Diterima" required aria-describedby="pilih tanggal" value="<?php echo $hasil['tanggal']; ?>">
                                                    </div>
                                                    <!-- end tanggal section -->
                                                    
                                                    <!-- start submit button -->
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <!-- end submit button -->
                                                    <!-- start back button -->
                                                    <a class="btn btn-danger" href="<?php echo $siteurl; ?>" target="_self">Kembali</a>
                                                    <!-- end back button -->
                                                    </form>
                                                    <?php
                                                }
                                            }
                                        }
                                        ?>