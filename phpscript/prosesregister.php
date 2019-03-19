<?php
   require_once("../phpscript/koneksi.php");

    $username = $_POST['username'];
    $pass = $_POST['password'];
    $level = $_REQUEST['level'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $sql = "SELECT * FROM pegawai WHERE username = '$username'";
    $query = $conn->query($sql);
    if($query->num_rows != 0) {
      echo "Username sudah ada yang pakai. Ulangi lagi";
    }else{
    $data = 
    "INSERT INTO pegawai (`username`,`password`,`level`,`nama`,`alamat`,`email`,`nohp`) VALUES ('$username','$pass','$level','$nama','$alamat','$email','$nohp')";
    $simpan = $conn->query($data);
    if($simpan) {
            echo "<div align='center'>Selesai mendaftarkan, Silahkan kembali ke <a href='../pages/home.php'>Home</a></div>";
          } else {
            echo "<div align='center'>Proses Gagal!</div>";
          }
        }
?>