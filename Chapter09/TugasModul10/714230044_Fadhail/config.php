<?php
$server = "localhost";
$user = "root";
$password = "xeroon09";
$namadb = "data_hobi";

$db = mysqli_connect($server, $user, $password, $namadb);

if(!$db){
    die("Gagal terhubung ke database : ".mysqli_connect_error());
}
?>