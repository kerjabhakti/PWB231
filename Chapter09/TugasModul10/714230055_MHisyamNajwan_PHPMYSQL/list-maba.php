<?php include ("config.php");?>

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

    <nav class="my-4">
        <a href="form-daftar.php" class="bg-blue-500 text-white py-2 px-4 rounded inline-block">[+] Tambah Data</a>
    </nav>

    <table class="border-collapse border w-full">
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

            while($maba = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td class='border p-2'>".$maba['id']."</td>";
                echo "<td class='border p-2'>".$maba['nama']."</td>";
                echo "<td class='border p-2'>".$maba['alamat']."</td>";
                echo "<td class='border p-2'>".$maba['jenis_kelamin']."</td>";
                echo "<td class='border p-2'>".$maba['agama']."</td>";
                echo "<td class='border p-2'>".$maba['sekolah_asal']."</td>";

                echo "<td class='border p-2'>";
                echo "<a href='form-edit.php?id=".$maba['id']."' class='text-blue-500 mr-2'>Edit</a>";
                echo "<a href='hapus.php?id=".$maba['id']."' class='text-red-500'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p class="mt-4">Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>
