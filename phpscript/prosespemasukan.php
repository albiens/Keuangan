<?php
   require_once("../phpscript/koneksi.php");

    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $data = 
    "INSERT INTO pemasukan (`nama`,`tanggal`,`jumlah`) VALUES ('$nama','$tanggal','$jumlah')";
    $update = $conn->query($data);
    if($update) {
      header("location: ../pages/pemasukan.php");
          } else {
            echo "Proses Gagal!";
          }
?>