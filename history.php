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

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../vendor/light-bootstrap/assets/img/apple-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parkir Drini-Park</title>
    <link rel="shortcut icon" href="assets/img/logo1.png">
    <link rel="stylesheet" href="assets/css/templete.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
</head>
<body>

    <div class="container"> 
        <div class="card ">
            <div class="card-header ">
                <h3 class="card-title">HISTORY</h3>
                    <hr>
            </div>
        </div>
        <div id="logo-drini">
            <img src="assets/img/logodrini.png" alt="logo drini" style="height: 100px;position: absolute;" position:="" "absolute"="">
        </div>       
        <div class="row drini-park">

            <?php
            include "config/config.php";
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $data = mysqli_query($koneksi,"SELECT * FROM kendaraan JOIN jenisKendaraan ON kendaraan.id_jenisKendaraan = jenisKendaraan.id_jenisKendaraan WHERE nomor_polisi LIKE '%".$cari."%' OR nama_kendaraan LIKE '%".$cari."%' OR qr_code LIKE '%".$cari."%' OR keterangan LIKE '%".$cari."%'");
            } else {
                $data = mysqli_query($koneksi,"SELECT * FROM kendaraan JOIN jenisKendaraan ON kendaraan.id_jenisKendaraan = jenisKendaraan.id_jenisKendaraan");
            }
            ?>
            <table id="drini" border="1" >
                <div id="container-drini-footer">
                    <h3>Daftar Kendaraan Parkir  | Repost by @Drini Park</h3><hr>
                </div>
                <tr>
                    <th>QR CODE</th>
                    <th>JENIS KENDARAAN</th>
                    <th>HARGA PARKIR</th>
                    <th>KETERANGAAN</th>
                </tr>
                <?php while ($kendaraan = mysqli_fetch_array($data)): ?>
                    <!--<div class="card-footer">
                        <div class="card-text"><b>Nomor Polisi : </b><//?= $kendaraan['nomor_polisi']; ?></div>
                    </div>-->                       
                    <tr>
                        <td><?= $kendaraan['qr_code']; ?></td>
                        <td><?= $kendaraan['nama_kendaraan']; ?></td>
                        <td> Rp.<?= rupiah($kendaraan['harga']); ?></td>
                        <td><?= $kendaraan['keterangan']; ?></td>
                    </tr> 
                <?php endwhile; ?>
            
            </table>            
            <div class="header-drini-park">
                <div class="drini-button">
                    <a href="admin/index.php"><button type = "submit" ><i class="fa-solid fa-rotate-left"></i><br>BACK</button></a>
                    <a target="_blank" href="config/kendaraan/do_print.php"><button type="submit" class="btn btn-drini-print"><i class="fa-solid fa-print"></i><br>PRINT</button></a>
                    <a target="_blank" href="config/kendaraan/do_excel.php"><button type="submit" class="btn btn-drini-save"><i class="fa-solid fa-download"></i><br>DOWNLOAD</button></a>
                    <a class="_blank" onclick="return confirm('Anda Yakin?');" href="config/process_delete.php"><button type="submit" class="btn btn-drini-delete"><i class="fa fa-trash"></i><br>DELETE</button></a>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('template/js.php'); ?>
</body>
</html>