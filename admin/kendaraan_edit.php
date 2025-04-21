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
    <link rel="apple-touch-icon" sizes="76x76" href="../vendor/light-bootstrap/assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Parkir Drini-Park</title>
    <link rel="shortcut icon" href="../assets/img/logo1.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <?php require_once('template/css.php'); ?>
</head>

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
                        <div class="card-header ">
                            <h4 class="card-title">Edit Kendaraan</h4>
                            <hr>
                        </div>

                        <div class="card-body ">

                            <?php
                            include "../config/config.php";
                            $id = $_GET['id'];
                            $data = mysqli_query($koneksi,"SELECT * FROM kendaraan JOIN jenisKendaraan ON kendaraan.id_jenisKendaraan = jenisKendaraan.id_jenisKendaraan WHERE id='$id'");
                            ?>

                            <?php foreach($data as $kendaraan): ?>
                            <form action="../config/kendaraan/do_edit.php" method="post">

                                <input type="hidden" name="id" value="<?= $kendaraan['id']; ?>">
                    
                                <!--<div class="form-group">
                                    <label for="nomor_polisi">Nomor Polisi Kendaraan</label>
                                    <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" value="<?= $kendaraan['nomor_polisi']; ?>">
                                </div>-->

                                <div class="form-group">
                                    <label for="nim">Nama Kendaraan</label>
                                    <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" value="<?= $kendaraan['nama_kendaraan']; ?>">
                                </div> 

                                <div class="form-group">
                                    <label for="email">ID QR</label>
                                    <input type="text" class="form-control" id="qr_code" name="qr_code" value="<?= $kendaraan['qr_code']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Kendaraan</label>
                                    <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan">
                                        <option value="<?= $kendaraan['id_jenisKendaraan']; ?>"><?= $kendaraan['jenis_kendaraan']; ?> - Rp.<?= rupiah($kendaraan['harga']); ?></option>
                                        <?php
                                        $jenis = mysqli_query($koneksi,"SELECT * FROM jenisKendaraan");
                                        while($jenisK = mysqli_fetch_array($jenis)){
                                        ?>
                                        <option value="<?= $jenisK['id_jenisKendaraan']; ?>"><?= $jenisK['jenis_kendaraan']; ?> - Rp.<?= rupiah($jenisK['harga']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>

                            </form>
                            <?php endforeach; ?>

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