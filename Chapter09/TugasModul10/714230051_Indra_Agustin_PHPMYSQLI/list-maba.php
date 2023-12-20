<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <h3 class="text-lg font-semibold">Pendaftaran Mahasiswa Baru</h3>
    </header>

    <nav class="py-2">
        <a href="form-daftar.php" class="bg-green-500 text-white py-2 px-4 rounded">[+] Tambah Data</a>
    </nav>

    <br>

    <table class="w-full border-collapse border"">
        <thead>
            <tr>
                <th class="border p-2">No</th>
                <th class="border p-2">Nama</th>
                <th class="border p-2">Alamat</th>
                <th class="border p-2">Jenis Kelamin</th>
                <th class="border p-2">Agama</th>
                <th class="border p-2">Sekolah Asal</th>
                <th class="border p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db, $sql);

            while ($maba = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td class='border p-2'>{$maba['id']}</td>";
                echo "<td class='border p-2'>{$maba['nama']}</td>";
                echo "<td class='border p-2'>{$maba['alamat']}</td>";
                echo "<td class='border p-2'>{$maba['jenis_kelamin']}</td>";
                echo "<td class='border p-2'>{$maba['agama']}</td>";
                echo "<td class='border p-2'>{$maba['sekolah_asal']}</td>";

                echo "<td class='border p-2'>";
                echo "<a href='form-edit.php?id={$maba['id']}' class='text-blue-500'>Edit</a> | ";
                echo "<a href='hapus.php?id={$maba['id']}' class='text-red-500'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p class="mt-4">Total: <?php echo mysqli_num_rows($query); ?></p>
</body>

</html>
