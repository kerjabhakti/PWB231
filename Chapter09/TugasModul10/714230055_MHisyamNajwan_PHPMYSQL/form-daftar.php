<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
</head>
<body class="bg-gray-100">

<header class="text-center mt-8">
    <h3 class="text-2xl font-semibold">Pendaftaran Mahasiswa Baru</h3>
</header>

<form action="proses-pendaftaran.php" method="POST" class="max-w-md mx-auto mt-8 bg-white p-6 rounded shadow-md">
    <fieldset>
        <div class="mb-4">
            <label for="nama" class="block text-gray-700">Name:</label>
            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="alamat" class="block text-gray-700">Alamat:</label>
            <textarea name="alamat" id="alamat" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Jenis Kelamin:</label>
            <div class="flex">
                <label class="mr-4"><input type="radio" name="jenis_kelamin" value="laki-laki" class="mr-1"> Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" class="mr-1"> Perempuan</label>
            </div>
        </div>

        <div class="mb-4">
            <label for="agama" class="block text-gray-700">Agama:</label>
            <select name="agama" id="agama" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="sekolah_asal" class="block text-gray-700">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Nama Sekolah" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <div>
            <input type="submit" value="Daftar" name="daftar" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
        </div>
    </fieldset>
</form>

</body>
</html>
