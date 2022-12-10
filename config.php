<?php
$siteurl;
$host;
$username;
$pass;
$db;
$domain = $_SERVER['SERVER_NAME'];
if($domain == '127.0.0.1'){
    $siteurl = 'http://'.$domain.'/lp3-siketat'.'/';
    $host = "127.0.0.1";
    $username = "root";
    $pass = "";
    $db = "lp3_db";
} else {
    $siteurl = 'https://'.$domain.'/';
    $host = 'localhost';
    $username = 'sojy3165_lp3';
    $pass = 'ofO%-n.^n)Oy';
    $db = 'sojy3165_lp3';
}
$appver = '1.14';
$rights = '2022';
$author = 'Ahmad Firdaus Ababil';
$authorlink = 'https://link.soj.my.id/?p=firdaus';
?>