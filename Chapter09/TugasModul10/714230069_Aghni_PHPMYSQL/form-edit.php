<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list-maba.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit maba | ULBI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-amber-50">
    <header>
    <div class="bg-rose-900 text-center text-2xl font-bold text-white p-4">
            <h3>Formulir Edit Maba</h3>
         </div>
    </header>

    <div class="pt-10">
        <form action="proses-edit.php" method="POST" class="max-w-sm mx-auto">

        <fieldset>
            <div class="mb-5">
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-500 dark:focus:border-rose-500" type="hidden" name="id" value="<?php echo $maba['id'] ?>" />
            </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="nama">Nama: </label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-500 dark:focus:border-rose-500" type="text" name="nama" placeholder="nama lengkap" value="<?php echo $maba['nama'] ?>" />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="alamat">Alamat: </label>
            <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-500 dark:focus:border-rose-500" name="alamat"><?php echo $maba['alamat'] ?></textarea>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $maba['jenis_kelamin']; ?>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="agama">Agama: </label>
            <?php $agama = $maba['agama']; ?>
            <select class="border-2 rounded-md" name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
            </select>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="sekolah_asal">Sekolah Asal: </label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-500 dark:focus:border-rose-500" type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $maba['sekolah_asal'] ?>" />
        </div>
        <div class="mb-5">
            <input class="text-white bg-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800" type="submit" value="Simpan" name="simpan" />
        </div>
        </fieldset>


    </form>
    </div>
    

</body>
</html>