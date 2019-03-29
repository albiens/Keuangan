<html>
<head>
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
						Detail
					</span>
  <?php
  include "../phpscript/koneksi.php";
  
  $id = $_GET['id'];

  $query = "SELECT * FROM pengeluaran WHERE id='".$id."'";
  $sql = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($sql);
  echo"
  No : <td>" . $data['id'] . "</td><br>
  Nama : <td>" . $data["nama"] . "</td><br>
  Tanggal : <td>" . $data["tanggal"] . "</td><br>
  Jumlah : <td>" . $data["jumlah"] . "</td><br>
  <td><img src='../bon_pengeluaran/".$data["foto"]."' width='200' height='200'></td><br><br>
  ";
?>

<button class="login100-form-btn" type="button" onclick="window.location.href='../pages/tablepengeluaran.php'" >back</button>

        </div>
    </div>
</div>
</body>


<?php  
}
?>

</html>