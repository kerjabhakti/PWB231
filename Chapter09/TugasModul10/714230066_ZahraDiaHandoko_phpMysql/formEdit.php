<?php
include("config.php");
//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){
    //ambil data dari formulir
    $nama = $_POST['nama'];
    $noid = $_POST['nomor_id'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nomor_hp'];
    $pilihbaju = $_POST['pilih_baju'];
    //buat  query update
    $sql= "UPDATE penyewaanbaju SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    $query= mysqli_query($db, $sql);
    //apakah query update berhasil?
    if($query){
        //kalau berhasil alihkan ke halaman lis-maba.php
        header('Location: list_penyewa');
    }
} else {
    die("Akses dilarang");
}
?>