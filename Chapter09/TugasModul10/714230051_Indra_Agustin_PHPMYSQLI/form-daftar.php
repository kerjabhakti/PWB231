<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Mahasiswa Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <a href="#" class="font-semibold text-lg">Formulir Pendaftaran Mahasiswa Baru</a>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="container mx-auto mt-4">
        <form action="proses-daftar.php" method="POST" class="max-w-md mx-auto p-4 border rounded">
            <fieldset>
                <p class="mb-4">
                    <label for="nama" class="block text-sm font-semibold text-gray-600">Nama:</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="w-full mt-1 p-2 border rounded">
                </p>
                <p class="mb-4">
                <label for="alamat" class="block text-sm font-semibold text-gray-600">Alamat:</label>
                <textarea name="alamat" class="w-full mt-1 p-2 border rounded"></textarea>
            </p>
            <p class="mb-4">
                <label class="block text-sm font-semibold text-gray-600">Jenis Kelamin</label>
                <label class="inline-block mr-2">
                    <input type="radio" name="jenis_kelamin" value="laki-laki" class="mr-1">Laki - laki
                </label>
                <label class="inline-block">
                    <input type="radio" name="jenis_kelamin" value="Perempuan" class="mr-1">Perempuan
                </label>
            </p>
            <p class="mb-4">
                <label for="agama" class="block text-sm font-semibold text-gray-600">Agama:</label>
                <select name="agama" class="w-full mt-1 p-2 border rounded">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p class="mb-4">
               <label for="sekolah_asal" class="block text-sm font-semibold text-gray-600">Sekolah Asal:</label>
               <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" class="w-full mt-1 p-2 border rounded">
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
                </p>
            </fieldset>
        </form>
    </div>

</body>
</html>
