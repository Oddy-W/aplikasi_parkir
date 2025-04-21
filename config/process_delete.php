<?php

session_start();

if(!isset($_SESSION['login'])){
    header("location:../login.php");
    exit;
}

include "config.php";
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM kendaraan WHERE id ");

if($query){
    header("location:../admin/index.php");

}else{
    header("location:../../history.php");
}
?>