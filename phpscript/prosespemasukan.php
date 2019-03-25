<?php
   require_once("../phpscript/koneksi.php");

    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $file = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "../bon_pemasukan/".$file;
    if(move_uploaded_file($tmp, $path)){
    $data = "INSERT INTO pemasukan (`nama`,`tanggal`,`jumlah`,`foto`) VALUES ('$nama','$tanggal','$jumlah','$file')";
    $update = $conn->query($data);
    if($update) {
      header("location: ../pages/pemasukan.php");
          } else {
            echo "Proses Gagal!";
          }
        }
?>