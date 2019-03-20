<?php
    session_start();
?>

<html>
<head>
    <title>
        Halaman Admin
    </title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../lib/Login_v3/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/css/util.css">
	<link rel="stylesheet" type="text/css" href="../lib/Login_v3/css/main.css">
<!--===============================================================================================-->

<style>
.bton{
	margin-right: 10px;
	margin-bottom: 20px;
}
</style>
</head>
 
<?php
if(!isset($_COOKIE["akun"])) {
    echo "You're not authorized! " ;
    header( "refresh:1;url=../index.php" );
?>

<?php
}else{
?>

<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('../lib/Login_v3/images/73013596_p1.png');">
			<div class="wrap-login100">
            <span class="login100-form-title p-b-34 p-t-27">
						Selamat Datang Admin
            </span>
            
    <div class="container-login100-form-btn">
        <button class="login100-form-btn bton" type="button" onclick="window.location.href='../pages/register.php'" >Buat Akun</button>
        <button class="login100-form-btn bton" type="button" onclick="window.location.href='../phpscript/logout.php'" >logout</button>
    </div>
            </div>
        </div>
</div>

<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>

<?php  
}
?>

</html>