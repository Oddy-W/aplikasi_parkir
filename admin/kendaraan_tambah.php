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
                            <h4 class="card-title">Tambah Kendaraan</h4>
                            <hr>
                        </div>

                        <div class="card-body ">

                            <form action="../config/kendaraan/do_tambah.php" method="post">
                                <select class= "form-control" name="nama_kendaraan" id="nama_kendaraan">
                                    <option value="Motor">MOTOR</option>
                                    <option value="Mobil">MOBIL</option>
                                    <option value="Elf">Elf | MINI BUS</option>
                                    <option value="Bus">BUS</option>
                                    <option value="Karyawan">KARYAWAN</option>
                                    <option value="Tamu">TAMU</option>
                                    <option value="df">DROP OFF</option>
                                </select>
                                <div class="form-group">
                                    <label for="qr">ID QR</label>
                                    <input type="text" class="form-control" id="qr_code" name="qr_code">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Parkir</label>
                                    <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan">
                                        <?php
                                        include "../config/config.php";
                                        $jenis = mysqli_query($koneksi,"SELECT * FROM jenisKendaraan");
                                        while($jenisK = mysqli_fetch_array($jenis)){
                                        ?>
                                        <option value="<?= $jenisK['id_jenisKendaraan']; ?>"><?= $jenisK['jenis_kendaraan']; ?> - Rp.<?= rupiah($jenisK['harga']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">NOTE</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>

                            </form>

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