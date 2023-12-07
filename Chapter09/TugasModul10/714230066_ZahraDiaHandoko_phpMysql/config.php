<?php
$srver = "localhost";
$user = "root";
$namadb="penyewaanbaju";

$db = mysqli_connect($server, $user, $namadb);
if(!$db){
    die("Gagal Terhubung degan Database :". mysqli_connect_error());   
}
?>