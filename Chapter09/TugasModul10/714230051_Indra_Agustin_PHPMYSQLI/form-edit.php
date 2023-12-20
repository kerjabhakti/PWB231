<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

$id = $_GET['id'];


$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa | SMK Coding</title>
    <!-- Add the link to Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <h3 class="text-lg font-semibold">Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST" class="max-w-md mx-auto mt-4">

        <fieldset class="bg-white p-4 shadow-md rounded-md">

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <p class="mb-2">
                <label for="nama" class="block text-sm font-medium text-gray-600">Nama:</label>
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" class="mt-1 p-2 border rounded-md w-full">
            </p>
            <p class="mb-2">
                <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat:</label>
                <textarea name="alamat" class="mt-1 p-2 border rounded-md w-full"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p class="mb-2">
                <label class="block text-sm font-medium text-gray-600">Jenis Kelamin:</label>
                <?php $jk = $siswa['jenis_kelamin']; ?>
                <label class="inline-flex items-center">
                    <input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?> class="form-radio">
                    <span class="ml-2">Laki-laki</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?> class="form-radio">
                    <span class="ml-2">Perempuan</span>
                </label>
            </p>
            <p class="mb-2">
                <label for="agama" class="block text-sm font-medium text-gray-600">Agama:</label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama" class="mt-1 p-2 border rounded-md w-full">
                    <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                </select>
            </p>
            <p class="mb-2">
                <label for="sekolah_asal" class="block text-sm font-medium text-gray-600">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" class="mt-1 p-2 border rounded-md w-full">
            </p>
            <p class="mt-4">
                <input type="submit" value="Simpan" name="simpan" class="bg-blue-500 text-white p-2 rounded">
            </p>

        </fieldset>

    </form>

</body>

</html>
