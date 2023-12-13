<?php 
require 'config.php';
$status = isset($_GET['status']) ? $_GET['status'] : '';

// $_GET['status'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran mahasiswa Baru ULBI</title>
</head>
<body>
    <header>
        <h3>Pendaftaran mahasiswa Baru</h3>
        <h1>UNIVERSITAS LOGISTIK DAN BISNIS INTERNASIONAL</h1>
    </header>
    
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftaran</a></li>
        </ul>
    </nav>
    <?php if ($status === 'sukses'): ?>
        <p>Pendaftaran Mahasiswa POLTEKPOS berhasil</p>
    <?php elseif ($status === 'gagal'): ?>
        <p>Pesan: Operasi gagal!</p>
    <?php else: ?>
        <p></p>
    <?php endif; ?>
</body>
</html>