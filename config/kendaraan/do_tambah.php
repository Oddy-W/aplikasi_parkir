<?php

include "../config.php";
$nomorP = $_POST['nomor_polisi'];
$namaK = $_POST['nama_kendaraan'];
$qrC = $_POST['qr_code'];
$jenisK = $_POST['jenis_kendaraan'];
$ket = $_POST['keterangan'];

$query = mysqli_query($koneksi,"INSERT INTO kendaraan VALUES('','$nomorP','$namaK','$qrC','$jenisK', '$ket')");

if($query){
    header("location:../../admin/kendaraan.php");

}else{
    header("location:../../admin/kendaraan.php");
}
?>