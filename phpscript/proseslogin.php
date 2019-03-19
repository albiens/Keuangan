<?php
   session_start();
   require_once("../phpscript/koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($conn,"SELECT * FROM pegawai WHERE username = '$username' AND password = '$password'");
$m = mysqli_fetch_array($data);
$user = $m['username'];
$pass = $m['password'];
$level = $m['level'];
if($username = $user && $password = $pass){
    $_SESSION['level'] = $level;

    setcookie("akun", "login", time() + (3600), "/");

    include "level.php";
}else{
    echo "password/username salah";
}
?>