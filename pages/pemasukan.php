<?php
   session_start();
?>

<html>
    <head>
        <title>
            Pemasukan
        </title>

         <!-- Icons font CSS-->
    <link href="../lib/colorlib-regform-3/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../lib/colorlib-regform-3/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../lib/colorlib-regform-3/vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../lib/colorlib-regform-3/css/main.css" rel="stylesheet" media="all">

    <style>
.bton{
	margin-right: 10px;
	margin-bottom: 20px;
}
</style>
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
                        <h2 class="title">Form Pemasukan</h2>
            <form action="../phpscript/prosesPemasukan.php" method="post">
            <table>

                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Nama Pemasukan" name="nama">
                    </div>

                    
                    <div class="input-group">
                        <input class="input--style-3" type="date" placeholder="Tanggal" name="tanggal">
                    </div>

                    <div class="input-group">
                        <input class="input--style-3" type="number" placeholder="Harga" name="jumlah">
                    </div>

                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green bton" type="submit">Masukkan</button>
                        <button class="btn btn--pill btn--green bton" type="button" onclick="window.location.href='../pages/homedirektur.php'" >Back</button>
                    </div>
                    
            </table>
            </form>
        </div>



<!-- Jquery JS-->
<script src="../lib/colorlib-regform-3/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../lib/colorlib-regform-3/vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="../lib/colorlib-regform-3/js/global.js"></script>

    </body>

<?php  
}
?>

</html>