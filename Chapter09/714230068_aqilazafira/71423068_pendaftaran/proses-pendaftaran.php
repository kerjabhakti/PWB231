<?php
include("config.php");

// cek apakah tombol daftar sudah bisa di klik atau belum
if (isset($POST['daftar'])) {

    // ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query
    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, sekolah_asal)
    VALUE ('$nama', $alamat, $jk, $agama, $sekolah)";
    $queryv = mysqli_query($db, $sql);

    // apakah query berhasil?
    if (query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses Dilarang...");
}
