<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <header class="bg-white py-4">
        <h3 class="text-2xl font-bold text-center">Formulir Pendaftaran Mahasiswa Baru | POLTEKPOS</h3>
    </header>

    <div class="max-w-md mx-auto mt-8">
        <form action="proses-daftar.php" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

            <fieldset>

                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                    <textarea name="alamat" placeholder="Alamat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin:</label>
                    <label class="mr-4">
                        <input type="radio" name="jenis_kelamin" value="laki-laki" class="mr-2 leading-tight text-gray-700">
                        Laki-laki
                    </label>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="perempuan" class="mr-2 leading-tight text-gray-700">
                        Perempuan
                    </label>
                </div>

                <div class="mb-4">
                    <label for="agama" class="block text-gray-700 text-sm font-bold mb-2">Agama:</label>
                    <select name="agama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="sekolah_asal" class="block text-gray-700 text-sm font-bold mb-2">Sekolah Asal:</label>
                    <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <input type="submit" value="Daftar" name="daftar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer">
                </div>

            </fieldset>

        </form>
    </div>

</body>

</html>