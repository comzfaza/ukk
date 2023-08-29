<?php
session_start();
include "koneksi2.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query= $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND PASSWORD='$password'");

$jumlahbaris = $query->rowCOUNT();

if($jumlahbaris> 0){

    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    
    header("location:halamanawal.php");
}else{
    header("location:login.php");
    
}