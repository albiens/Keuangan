<?php
   session_start();
?>

<html>
    <head>
        <title>
            Pendaftaran Pegawai
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


    </head>

    <?php
if(!isset($_COOKIE["akun"])) {
    echo "You're not authorized!";
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
                        <h2 class="title">Pendaftaran Pegawai</h2>
                        <form action="../phpscript/prosesregister.php" method="post">
                        
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="username">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                        </div>


                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="level">
                                        <option value="admin">Admin</option>
                                        <option value="direktur">Direktur Keuangan</option>
                                        <option value="owner">Owner</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nama" name="nama">
                        </div>


                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Alamat" name="alamat">
                        </div>


                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="No Handphone" name="nohp">
                        </div>
                       
                        <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit">Register</button>
                        <button class="btn btn--pill btn--green" type="button" onclick="window.location.href='../pages/home.php'" >Back</button>
                        </div>
                </form>
            </div>
        </div>
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