<?php
include("config.php");

//cek tombol sudah di click atau belum
if(isset($_POST['daftar'])){
    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolahasal'];

    //buat query
    $sql = "INSERT INTO pendaftaran (nama, alamat, jeniskelamin, agama, sekolahasal)
    VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if($query){
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    }else {
        //kalau gagal dialihkan ke halaman index.php dengan status gagal
        header('Location: index.php?status=gagal');
    }

}else{
    die("Akses dilarang...");
}
?>