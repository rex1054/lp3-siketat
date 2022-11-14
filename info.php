<?php
$sitename = "SIKETAT";
$sitefullname = "Sistem Informasi Kelola Tanda Terima";
$siteurl;
$domain = $_SERVER['SERVER_NAME'];
if($domain == '127.0.0.1'){
    $siteurl = 'http://'.$domain.'/lp3'.'/';
} else {
    $siteurl = 'https://'.$domain.'/';
}
$appver = "1.14";
?>