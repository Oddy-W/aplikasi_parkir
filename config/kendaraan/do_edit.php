<?php
session_start();

if(!isset($_SESSION['login'])){
  header("location:../login.php");
  exit;
}

include "../config.php";

$id = $_POST['id'];
$nomorP = $_POST['nomor_polisi'];
$namaK = $_POST['nama_kendaraan'];
$qrC = $_POST['qr_code'];
$jenisK = $_POST['jenis_kendaraan'];

$query = mysqli_query($koneksi,"UPDATE kendaraan SET nomor_polisi='$nomorP',nama_kendaraan='$namaK',qr_code='$qrC',id_jenisKendaraan='$jenisK' WHERE id='$id'");

if($query){
    header("location:../../admin/kendaraan.php");
}else{
    header("location:../../admin/kendaraan.php");
}
?>