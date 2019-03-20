<html>
<head>
  <title>Edit Data</title>
  <!-- Icons font CSS-->
  <link href="../lib/colorlib-regform-3/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../lib/colorlib-regform-3/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../lib/colorlib-regform-3/vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../lib/colorlib-regform-3/css/main.css" rel="stylesheet" media="all">

    </head>
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
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                    <div class="card-body">
                        <h2 class="title">Merubah Data Pengeluaran</h2>
  <?php
  include "../phpscript/koneksi.php";
  
  $id = $_GET['id'];

  $query = "SELECT * FROM pengeluaran WHERE id='".$id."'";
  $sql = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($sql);
  ?>
  
  <form method="post" action="../phpscript/editpengeluaran.php">
  <div class="input-group">
    <td><input class="input--style-3" type="hidden" name="id" value="<?php echo $data['id']; ?>"></td>
  </div>
  <div class="input-group">
    <td><input class="input--style-3" type="text" placeholder="Nama Barang" name="nama" value="<?php echo $data['nama']; ?>"></td>
  </div>
  <div class="input-group">
    <td><input class="input--style-3" type="date" placeholder="Tanggal" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
  </div>
  <div class="input-group">
    <td><input class="input--style-3" type="number" placeholder="Harga" name="jumlah" value = "<?php echo $data['jumlah']; ?>"></td>
  </div>
  
  <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit" value="update">Update</button>
                        <button class="btn btn--pill btn--green" type="button" onclick="window.location.href='../pages/tablepengeluaran.php'" >Back</button>
                    </div>
</body>

<?php  
}
?>