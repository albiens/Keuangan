<?php

require_once("../phpscript/koneksi.php");

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['del'])){
  $id = $_POST['id_pem'];
  $sql = "DELETE FROM `pemasukan` WHERE id = $id"; 
  $del = mysqli_query($conn,$sql);
  if ($conn->query($sql)){
      //echo "asw";
  }
      
}
?>

<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="../lib/bootstrap.min.css" />
  <link rel="stylesheet" href="../lib/dataTables.bootstrap.min.css" />
  
  <script src="../lib/jquery-3.1.0.js"></script>
  <script src="../lib/jquery.dataTables.min.js"></script>
  <script src="../lib/dataTables.bootstrap.min.js"></script>
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
		<h1>Daftar Pemasukan PT Mitra Kinerja Utama</h1>
	</center>
	<br/>
	<br/>

	<div class="container">
    
    <table id="tabelku" class="table table-striped table-bordered">
			<thead>
                <tr>
                  <th>ID Pemasukan</th>
                  <th>Nama Produk</th>
                  <th>Tanggal</th>
                  <th>Harga</th>
                  <th>Bon</th>
                  <th>Aksi</th>
                </tr>
			    </thead>
			<tbody>    
        <?php
          session_start();
          require_once("../phpscript/koneksi.php");
          $sql = "SELECT * FROM pemasukan";
          $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo 
                  "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["tanggal"] . "</td>
                    <td>" . $row["jumlah"] . "</td>
                    <td><img src='../bon_pemasukan/".$row["foto"]."' width='100' height='100'></td>
                    <td>            
                      <form action='' method='post'>          
                        <input type='text' name='id_pem' value=" . $row["id"] ." hidden>
                        <input type='submit' name= 'del' value='delete' />
                      </form> 
                      <a href='../pages/editpemasukan.php?id=$row[id]'> <button>Update</button> </a>      
                    </td>
                  </tr>";
              }
              echo "</table>";
          } else {
              echo "0 results";
          }
        ?>
			</tbody>
        <tfoot>
        <button  type="button" onclick="window.location.href='../pages/homedirektur.php'" >Home</button>
        <button  type="button" onclick="window.location.href='../phpscript/export_excelpem.php'" >Export Excel</button>
        <br>
        <br>
        </tfoot>
		</table>
    
	</div>
</body>

<?php  
}
?>


<script>
  $(document).ready(function(){
    $('#tabelku').DataTable();
});
  </script>

</html>