<?php

include("config.php");

// If there is no id in the query string
if (!isset($_GET['id'])) {
    header('Location: list-nama.php');
}

// Get id from the query string
$id = $_GET['id'];

// Query to get data from the database
$sql = "SELECT * FROM data WHERE id=$id";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

// If the data to be edited is not found
if (mysqli_num_rows($query) < 1) {
    die("Data not found...");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Hobi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-indigo-500">

    <form action="proses-edit.php" method="POST" class="max-w-md mx-auto mt-8 bg-white p-8 border rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-6">Edit Data Hobi Mahasiswa</h2>
        <fieldset>

            <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>" />

            <div class="mb-4">
                <label for="npm" class="block text-sm font-medium text-gray-600">NPM :</label>
                <input type="text" name="npm" placeholder="NPM" value="<?php echo $mahasiswa['npm'] ?>" class="border rounded-md p-2 w-full" />
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-600">Nama : </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $mahasiswa['nama'] ?>" class="border rounded-md p-2 w-full" />
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-600">Jenis Kelamin : </label>
                <?php $jk = $mahasiswa['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
            </div>
            <div class="mb-4">
                <label for="usia" class="block text-sm font-medium text-gray-600 mb-1">Usia :</label>
                <?php $usia = $mahasiswa['usia']; ?>
                <select name="usia" class="border rounded-md p-2">
                    <option <?php echo ($usia == '17') ? "selected" : "" ?>>17</option>
                    <option <?php echo ($usia == '18') ? "selected" : "" ?>>18</option>
                    <option <?php echo ($usia == '19') ? "selected" : "" ?>>19</option>
                    <option <?php echo ($usia == '20') ? "selected" : "" ?>>20</option>
                    <option <?php echo ($usia == '21') ? "selected" : "" ?>>21</option>
                    <option <?php echo ($usia == '22') ? "selected" : "" ?>>22</option>
                    <option <?php echo ($usia == '23') ? "selected" : "" ?>>23</option>
                    <option <?php echo ($usia == '24') ? "selected" : "" ?>>24</option>
                    <option <?php echo ($usia == '25') ? "selected" : "" ?>>25</option>
                    <option <?php echo ($usia == '26') ? "selected" : "" ?>>26</option>
                    <option <?php echo ($usia == '27') ? "selected" : "" ?>>27</option>
                    <option <?php echo ($usia == '28') ? "selected" : "" ?>>28</option>
                    <option <?php echo ($usia == '29') ? "selected" : "" ?>>29</option>
                    <option <?php echo ($usia == '30') ? "selected" : "" ?>>30</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="hobi" class="block text-sm font-medium text-gray-600">Hobi : </label>
                <input type="text" name="hobi" placeholder="Hobi" value="<?php echo $mahasiswa['hobi'] ?>" class="border rounded-md p-2 w-full" />
            </div>
            <div>
                <input type="submit" value="Edit" name="edit" class="bg-blue-500 text-white py-2 px-4 rounded-md cursor-pointer" />
            </div>

        </fieldset>

    </form>

</body>

</html>
