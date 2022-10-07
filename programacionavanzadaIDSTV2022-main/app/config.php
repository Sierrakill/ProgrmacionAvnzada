<?php
session_start();

if(!isset($_SESSION['super_token'])){
    $_SESSION['super_token']=md5(uniqid(mt_rand(), true));
}
if(!defined('BASEPATH')){
    define('BASEPATH','http://localhost/Web/programacionavanzadaIDSTV2022-main/');
}
?>