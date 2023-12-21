<?php
include("config.php");
if(isset($_POST['daftar'])){
    $id = $_POST['id'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $usia = $_POST['usia'];
    $hobi = $_POST['hobi'];

    $sql = "INSERT INTO data (npm, nama, jenis_kelamin, usia, hobi) 
    VALUE ('$npm', '$nama', '$jk', '$usia', '$hobi')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>