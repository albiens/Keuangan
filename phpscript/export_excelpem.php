<html>
<body>
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=pemasukan.xls");
?>
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
                </tr>
			    </thead>
			<tbody>    
        <?php
          session_start();
          require_once("../phpscript/koneksi.php");
          $sql = "SELECT id, nama, tanggal , jumlah FROM pemasukan";
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
		</table>
    
	</div>
</body> 
</html>