<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:pages/login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>