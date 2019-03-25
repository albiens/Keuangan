<html>
<head>

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
    <center>
		<h1>Detail</h1>
	</center>
  <?php
  include "../phpscript/koneksi.php";
  
  $id = $_GET['id'];

  $query = "SELECT * FROM pemasukan WHERE id='".$id."'";
  $sql = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($sql);
  echo"
  No : <td>" . $data['id'] . "</td><br>
  Nama : <td>" . $data["nama"] . "</td><br>
  Tanggal : <td>" . $data["tanggal"] . "</td><br>
  Jumlah : <td>" . $data["jumlah"] . "</td><br>
  <td><img src='../bon_pemasukan/".$data["foto"]."' width='100' height='100'></td><br><br>
  ";
?>
</body>

<button  type="button" onclick="window.location.href='../pages/tablepemasukanowner.php'" >back</button>

<?php  
}
?>

</html>