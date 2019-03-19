<?php
//setcookie("akun", "login", time()-3600);
setcookie("akun", "login", time() - (3600), "/");
header('location:../index.php')
?>