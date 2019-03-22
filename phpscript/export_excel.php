<html>
<body>
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=pendapatan.xls");
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
</table>
</div>
</body>
</html>