<?php
$server = "localhost";
$user = "root";
$password = "";
$namadb = "mahasiswaBaru";

$db = mysqli_connect($server, $user, $password, $namadb);

if(!$db){
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}
?>