<?php

session_start();


include "../config.php";
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM kendaraan WHERE id='$id'");

if($query){
    header("location:../../admin/kendaraan.php");

}else{
    header("location:../../admin/kendaraan.php");
}
?>