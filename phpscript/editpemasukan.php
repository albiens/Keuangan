<?php
include "../phpscript/koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];

if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  
  
  // Set path folder tempat menyimpan fotonya
  $path = "../bon_pemasukan/".$foto;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM pemasukan WHERE id='".$id."'";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("../bon_pemasukan/".$data['foto'])) // Jika foto ada
      unlink("../bon_pemasukan/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE pemasukan SET nama='$nama' , tanggal='$tanggal' , jumlah ='$jumlah' , foto='$foto' WHERE id='$id' ";
    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: ../pages/tablepemasukan.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='../pages/editpemasukan.php'>Kembali Ke Form</a>";
    }
  }
}
  else{

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
}

?>