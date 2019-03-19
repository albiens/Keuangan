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
    echo "You're not authorized!";
?>

<?php
}else{
?>

<body>

	<center>
		<h1>Daftar Pengeluaran PT Mitra Kinerja Utama</h1>
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
                </tr>
			    </thead>
			<tbody>    
        <?php
          session_start();
          require_once("../phpscript/koneksi.php");
          $sql = "SELECT id, nama, tanggal , jumlah FROM pengeluaran";
          $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo 
                  "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["tanggal"] . "</td>
                    <td>" . $row["jumlah"] . "</td>
                  </tr>";
              }
              echo "</table>";
          } else {
              echo "0 results";
          }
        ?>
			</tbody>
      <tfoot>
        <button  type="button" onclick="window.location.href='../pages/homeowner.php'" >Home</button>
        <br>
        <br>
        </tfoot>
		</table>
    
	</div>
</body>

<?php  
}
?>

</html>

<script>
  $(document).ready(function(){
    $('#tabelku').DataTable();
});
</script>

</body>
</html>