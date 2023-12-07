<?php
include("config.php");
if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jenis_kelamin'];
    $hobby = $_POST['hobby'];
    $alasan = $_POST['alasan'];
    $al = $_POST['asal_lahir'];

    $sql = "INSERT INTO data (nama, umur, jenis_kelamin, hobby, alasan , asal_lahir) 
    VALUE ('$nama', '$umur', '$jk', '$hobby', '$alasan', '$al')";
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