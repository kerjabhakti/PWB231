<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru POLTEKPOS</title>
</head>
<body>
    <header>
        <h1>Pendaftaran Mahasiswa Baru </h1>
        <h3>Politeknik Pos Indonesia</h3>
    </header>
    <h4>Menu</h4>
    <nav>
    <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftar</a></li>
            </ul>
    </nav>

    <?php
    // Tampilkan pesan status jika ada
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        if ($status == 'sukses') {
            echo "<p>Pendaftaran mahasiswa baru POLTEKPOS berhasil.</p>";
        } elseif ($status == 'gagal') {
            echo "<p style='color: red;'>Pendaftaran mahasiswa baru gagal.</p>";
        }
    }
    ?>
</body>
</html>