<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru ULBI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-blue-500 text-white p-4 text-center">
        <h3 class="text-lg font-semibold">Pendaftaran Mahasiswa baru</h3>
        <h1 class="text-2xl font-bold">Universitas Bisnis dan Logistik Internasional</h1>
    </header>

    <nav class="bg-gray-200 p-4">
        <h4 class="text-lg font-semibold">Menu</h4>
        <ul class="mt-2">
            <li class="mb-2"><a href="form-daftar.php" class="text-blue-500 hover:underline">Daftar</a></li>
            <li class="mb-2"><a href="list-maba.php" class="text-blue-500 hover:underline">Pendaftar</a></li>
        </ul>
    </nav>

    <h1>Status Pendaftaran</h1>
    <?php 
    if (isset($status)) {
        echo "<p>$status</p>";
    } else {
        echo "<p>Status Pendaftaran Berhasil.</p>";
    }
    ?>
    <?php include("config.php"); ?>
</body>
</html>

