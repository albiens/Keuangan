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
		<h1>Daftar Pemasukan PT Mitra Kinerja Utama</h1>
	</center>
	<br/>
	<br/>

	<div class="container">
    
    <table id="tabelku" class="table table-striped table-bordered">
			<thead>
                <tr>
                  <th>Tahun - Bulan Pemasukan</th>
                  <th>Total Penjumlahan</th>
                  <th>Tahun - Bulan Pengeluaran</th>
                  <th>Total Pengeluaran</th>
                  <th>Pendapatan</th>
                </tr>
			    </thead>
			<tbody>    
        <?php
          session_start();
          require_once("../phpscript/koneksi.php");
          $sql = "SELECT * FROM sums";
          $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  $subTotalPemasukan = (int)str_replace(",","",$row["total"]);
                  $subTotalPengeluaran = (int)str_replace(",","",$row["jumlah"]);
                  $a = ($subTotalPemasukan - $subTotalPengeluaran);
                  if(strlen($a)==3){
                    $string = $a;
                    $replacement = ',';
                
                    $string =  substr_replace($string, $replacement, 0, 0); 
                }elseif(strlen($a)==4){
                    $string = $a;
                    $replacement = ',';
                
                    $string =  substr_replace($string, $replacement, 1, 0); 
                }elseif(strlen($a)==5){
                    $string = $a;
                    $replacement = ',';
                
                    $string =  substr_replace($string, $replacement, 2, 0); 
                }elseif(strlen($a)==6){
                    $string = $a;
                    $replacement = ',';
                
                    $string =  substr_replace($string, $replacement, 3, 0); 
                }elseif(strlen($a)==7){
                    $string = $a;
                    $replacement = ',';
                
                    $string = substr_replace($string, $replacement, 4, 0);
                    $string = substr_replace($string, $replacement, 1, 0); 
                }elseif(strlen($a)==8){
                    $string = $a;
                    $replacement = ',';
                 
                    $string = substr_replace($string, $replacement, 5, 0);
                    $string =  substr_replace($string, $replacement, 2, 0); 
                }elseif(strlen($a)==9){
                    $string = $a;
                    $replacement = ',';
                    
                    $string = substr_replace($string, $replacement, 6, 0);
                    $string = substr_replace($string, $replacement, 3, 0); 
                }elseif(strlen($a)==10){
                    $string = $a;
                    $replacement = ',';
                    $string = substr_replace($string, $replacement, 7, 0);
                    $string = substr_replace($string, $replacement, 4, 0);
                    $string = substr_replace($string, $replacement, 1, 0); 
                }elseif(strlen($a)==11){
                    $string = $a;
                    $replacement = ',';
                    $string = substr_replace($string, $replacement, 8, 0);
                    $string = substr_replace($string, $replacement, 5, 0);
                    $string = substr_replace($string, $replacement, 2, 0); 
                }elseif(strlen($a)==12){
                    $string = $a;
                    $replacement = ',';
                    $string = substr_replace($string, $replacement, 9, 0);
                    $string = substr_replace($string, $replacement, 6, 0);
                    $string = substr_replace($string, $replacement, 3, 0); 
                }
                  echo 
                  "<tr>
                    <td>" . $row["Tahun_Bulan"] . "</td>
                    <td>" . $row["total"] . "</td>
                    <td>" . $row["tanggal"] . "</td>
                    <td>" . $row["jumlah"] . "</td>
                    <td>" . $string . "</td>
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
        <br>
        <br>
        </tfoot>
<?php  
}
?>
		</table>
    
	</div>
</body>
</html>

<script>
  $(document).ready(function(){
    $('#tabelku').DataTable();
});
  </script>

</body>
</html>