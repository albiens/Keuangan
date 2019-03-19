<?php
include "../phpscript/koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];

  $query = "UPDATE pemasukan SET nama='$nama' , tanggal='$tanggal' , jumlah ='$jumlah' WHERE id='$id' ";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
  header("location: ../pages/tablepemasukan.php");
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../pages/editpemasukan.php'>Kembali Ke Form</a>";
  }
?>