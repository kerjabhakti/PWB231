<?php
$server = "Localhost";
$user = "root";
$password = "root";
$namadb = "mahasiswabaru";

$db = mysqli_connect($server, $user, $password, $namadb);

if (!$db) {
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}
