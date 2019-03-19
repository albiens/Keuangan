<?php
   session_start();
   require_once("../phpscript/koneksi.php");

$level_admin = $_SESSION['level'] == 'admin';
$level_direktur = $_SESSION['level'] == 'direktur';
if($level_admin){
    header('location:../pages/home.php');
}elseif($level_direktur){
    header('location:../pages/homedirektur.php');
}else{
    header('location:../pages/homeowner.php');
}
?>