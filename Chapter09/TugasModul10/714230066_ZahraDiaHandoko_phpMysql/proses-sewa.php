<?php
include("config.php");

// cek apakah tombol daftar sudah bisa di klik atau belum
if(isset($POST['daftar'])){

    // ambil data dari form
    $nama = $_POST['nama'];
    $noid = $_POST['nomor_id'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nomor_hp'];
    $pilihbaju = $_POST['pilih_baju'];

    // buat query
    $sql = "INSERT INTO penyewaan (nama, nomor_id, alamat, nomor_hp, pilih_baju)
    VALUE ('$nama', $noid, $alamat, $nohp, $pilihbaju)";
    $queryv= mysqli_query($db, $sql);

    // apakah query berhasil?
    if(query){
        // kalau berhasil
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal
        header('Location: index.php?status=gagal');
    }
} else{
    die("Akses Dilarang...");
}