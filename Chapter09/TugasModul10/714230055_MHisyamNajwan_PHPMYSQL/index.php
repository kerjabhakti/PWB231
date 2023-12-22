<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pendaftaran Mahasiswa ULBI</title>
</head>
<body class="bg-gray-100">

    <div class="bg-white max-w-2xl mx-auto p-8 mt-8 shadow-md">
        <header class="text-center mb-8 text-3xl text-gray-800 font-bold">
            <h3>Pendaftaran Mahasiswa</h3>
            <h1>ULBI</h1>
        </header>
        <h4 class="text-gray-700 font-bold">Menu</h4>
        <nav>
            <ul class="list-none">
                <li class="mb-4">
                    <a href="form-daftar.php" class="text-blue-500 hover:text-blue-700">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Daftar</button>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="list-maba.php" class="text-blue-500 hover:text-blue-700">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pendaftaran</button>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <nav class="mt-4">
        <?php if(isset($_GET['status'])): ?>
        <p class="<?php echo ($_GET['status'] == 'sukses') ? 'text-green-600' : 'text-red-600'; ?>">
            <?php echo ($_GET['status'] == 'sukses') ? 'Pendaftaran siswa baru berhasil!' : 'Pendaftaran gagal!'; ?>
        </p>
        <?php endif; ?>
    </nav>

</body>
</html>