<?php
session_start();
require_once('../master.php');

$uname = $_POST['username'];
$pass = $_POST['password'];

$sql = 'SELECT * FROM user WHERE username = "'.$uname.'"';
$result = $con->query($sql);
if($sql){
    $data = $result->fetch_assoc();
    if($pass == $data['password']){
        $_SESSION['name'] = $data['username'];
        ?>
        <script>window.open('<?php echo $siteurl; ?>admin/', '_self');</script>
        <?php
    } else {
        ?>
        <script>alert('kata sandi salah!');window.open('<?php echo $siteurl; ?>', '_self');</script>
        <?php
    }
} else {
    ?>
    <script>alert('akun tidak ditemukan!');window.open('<?php echo $siteurl; ?>', '_self');</script>
    <?php
}
?>