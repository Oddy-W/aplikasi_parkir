<?php
session_start();

    date_default_timezone_set("Asia/Jakarta");
    $waktu = date('H:i');
    $tanggal = date('D, d M Y');

    if(!isset($_SESSION['login'])){
        header("location:../login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Parkir Drini-Park</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="shortcut icon" href="../assets/img/logo1.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <?php require_once('template/css.php'); ?>
</head>

<?php
  include "../config/config.php";
 

  $cek_isi = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kendaraan"));

  $cek_mobil = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE nama_kendaraan ='mobil'"));
  $cek_motor = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE nama_kendaraan ='motor'"));
  $cek_elf = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE nama_kendaraan ='elf'"));
  $cek_lainnya = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE nama_kendaraan ='bus'"));
  $cek_kry = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE nama_kendaraan ='karyawan'"));
  $cek_tamu = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE nama_kendaraan ='tamu'"));
  $cek_df = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE nama_kendaraan ='df'"));
 ?>


<body>

 
    <div class="wrapper">
        <div class="sidebar" data-image="../vendor/light-bootstrap/assets/img/sidebar-5.jpg">
            <?php require_once('template/sidebar.php'); ?>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <?php require_once('template/nav.php'); ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">                  
                    <div class="card ">
                        <div class="card-header background-color:#CF0B88">
                            <h4 class="card-title">DASHBOARD</h4>
                            <hr>
                        </div>
                            <div class="card-drini">
                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; color : red;">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 style="color: black;font-size: 20pt; text-align:center;">MOTOR</h4>
                                        </div>
                                        <div class="panel-body" style="text-align: center;font-size: 64pt; background-color:#2471A3">
                                            <?= $cek_motor ?>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; color : red;">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 style="color: black;font-size: 20pt; text-align:center;">MOBIL</h4>
                                        </div>
                                        <div class="panel-body" style="text-align: center;font-size: 64pt; background-color:#208E0D">
                                            <?= $cek_mobil ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; color : red;">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 style="color: black;font-size: 20pt; text-align:center;">ELF | MINI BUS</h4>
                                        </div>
                                        <div class="panel-body" style="text-align: center;font-size: 64pt; background-color:#208E0D">
                                            <?= $cek_elf ?>
                                        </div>
                                    </div>
                                </div>
                           
                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; color : red;">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 style="color: black;font-size: 20pt; text-align:center;">BUS</h4>
                                        </div>
                                        <div class="panel-body" style="text-align: center;font-size: 64pt; background-color:#CFCC0B">
                                            <?= $cek_lainnya ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; color : red;">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 style="color: black;font-size: 20pt; text-align:center;">KARYAWAN</h4>
                                        </div>
                                        <div class="panel-body" style="text-align: center;font-size: 64pt; background-color:#CFCC0B">
                                            <?= $cek_kry ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; color : red;">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 style="color: black;font-size: 20pt; text-align:center;">TAMU</h4>
                                        </div>
                                        <div class="panel-body" style="text-align: center;font-size: 64pt; background-color:#CFCC0B">
                                            <?= $cek_tamu ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; color : red;">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 style="color: black;font-size: 20pt; text-align:center;">DROP OFF</h4>
                                        </div>
                                        <div class="panel-body" style="text-align: center;font-size: 64pt; background-color:#208E0D">
                                            <?= $cek_df ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <?php require_once('template/footer.php'); ?>
        </div>
    </div>

    <?php require_once('template/js.php'); ?>
</body>


</html>