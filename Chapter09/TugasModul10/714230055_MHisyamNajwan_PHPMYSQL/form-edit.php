<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-maba.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Data ULBI</title>
</head>

<body class="bg-gray-100 p-8">

    <h3 class="text-2xl font-semibold mb-4">Formulir Edit Siswa</h3>

    <form action="proses-edit.php" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">

        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <div class="mb-4">
            <label for="nama" class="block text-gray-700">Nama:</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="alamat" class="block text-gray-700">Alamat:</label>
            <textarea name="alamat" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500"><?php echo $siswa['alamat'] ?></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Jenis Kelamin:</label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <div class="flex">
                <label class="mr-4"><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
            </div>
        </div>

        <div class="mb-4">
            <label for="agama" class="block text-gray-700">Agama:</label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
                <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="sekolah_asal" class="block text-gray-700">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <div>
            <input type="submit" value="Simpan" name="simpan" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
        </div>

    </form>

</body>

</html>
