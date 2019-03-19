<?php
   require_once("../phpscript/koneksi.php");

    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $data = 
    "INSERT INTO pengeluaran (`nama`,`tanggal`,`jumlah`) VALUES ('$nama','$tanggal','$jumlah')";
    $simpan = $conn->query($data);
    if($simpan) {
      header("location: ../pages/pengeluaran.php");
          } else {
            echo "<div align='center'>Proses Gagal!</div>";
          }
?>