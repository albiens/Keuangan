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
                  <th>Tahun - Bulan Pemasukan</th>
                  <th>Total Penjumlahan</th>
                  <th>Tahun - Bulan Pengeluaran</th>
                  <th>Total Pengeluaran</th>
                  <th>Pendapatan</th>
                </tr>
			    </thead>
			<tbody>    
        <?php
          include "../phpscript/strlen.php";
        ?>
			</tbody>
        <tfoot>
        <button  type="button" onclick="window.location.href='../pages/homedirektur.php'" >Home</button>
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