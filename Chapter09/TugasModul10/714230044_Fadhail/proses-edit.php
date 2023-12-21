<?php

include("config.php");

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $usia = $_POST['usia'];
    $hobi = $_POST['hobi'];

    $sql = "UPDATE data SET npm='$npm', nama='$nama', jenis_kelamin='$jk', usia='$usia', hobi='$hobi' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-nama.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>