<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-amber-50">
    <header>
        <div class="bg-rose-900 text-center text-2xl font-bold text-white p-4">
            <h3>Formulir Pendaftaran mahasiswa Baru | ULBI</h3>
         </div>
    </header>

    <div class="pt-10">
    <form action="proses-daftar.php" method="POST" class="max-w-sm mx-auto">
        <fieldset>
            <div class="mb-5">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-500 dark:focus:border-rose-500" type="text" name="nama" placeholder="nama lengkap"/>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="alamat">Alamat: </label>
                <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-500 dark:focus:border-rose-500" name="alamat"></textarea>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="jenis_kelamin">Jenis kelamin: </label>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" ><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="laki-laki">Laki-laki</label>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" ><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="perempuan">Perempuan </label>            
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="agama">Agama: </label>
                <select class="border-2 rounded-md" name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="sekolah_asal">Sekolah Asal: </label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-500 dark:focus:border-rose-500" type="text" name="sekolah_asal" placeholder="nama sekolah">
            </div>
            <div class="mb-5">
                <input class="text-white bg-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800" type="submit" value="Daftar" name="daftar">
            </div>
        </fieldset>
    </form>
    </div>
</body>
</html>