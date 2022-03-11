<?php
if(isset($_GET['src'])){
    require_once('master.php');
} else {
    require_once('../master.php');
}

if(isset($_POST['get_option']))
{

    $state = $_POST['get_option'];
    
    if($state == ''){
        ?>
        <option selected>Pilih Fakultas Terlebih Dahulu</option>
        <?php
    }
    else {
        
        $getProdiQuery = "SELECT * FROM prodi where id_fakultas = ".$state;
        $getProdi = $con->query($getProdiQuery);
        if($getProdi->num_rows == 0) {
            echo "Tidak ada data untuk ditampilkan.";
        }
        else {
            if(mysqli_num_rows($getProdi)>0) { 
                $hmmm = 1;
                do {
                    if($hmmm == 1){
                        ?>
                        <option value="" selected disabled>Pilih Program Studi</option>
                        <?php
                        $hmmm++;
                    } else {
                        ?>
                        <option value="<?php echo $data['id_prodi']; ?>"><?php echo $data['prodi']; ?></option>
                        <?php
                        $hmmm++;
                    }
                }
                while ($data = mysqli_fetch_array($getProdi));
            } ?>
            </table>
            <?php
        }
    }
}
else {
    $state = $_POST['get_fak'];
    
    if($state == ''){
        ?>
        <option selected>Pilih Fakultas Terlebih Dahulu</option>
        <?php
    }
    else {
        
        $getProdiQuery = "SELECT prodi.id_prodi, prodi.prodi, prodi.id_fakultas, fakultas.fakultas FROM prodi join fakultas on prodi.id_fakultas = fakultas.id_fakultas where fakultas.fakultas = '".$state."'";
        $getProdi = $con->query($getProdiQuery);
        if($getProdi->num_rows == 0) {
            echo "Tidak ada data untuk ditampilkan.";
        }
        else {
            if(mysqli_num_rows($getProdi)>0) { 
                $hmmm = 1;
                do {
                    if($hmmm == 1){
                        ?>
                        <option value="" selected disabled>Pilih Program Studi</option>
                        <?php
                        $hmmm++;
                    } else {
                        ?>
                        <option value="<?php echo $data['prodi']; ?>"><?php echo $data['prodi']; ?></option>
                        <?php
                        $hmmm++;
                    }
                }
                while ($data = mysqli_fetch_array($getProdi));
            } ?>
            </table>
            <?php
        }
    }
}
?>