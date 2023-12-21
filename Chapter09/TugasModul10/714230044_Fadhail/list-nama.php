<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hobi Kelas 1B</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900">

    <header class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 font-bold p-4 text-center">
        <h2 class="text-5xl text-white">List Hobi Mahasiswa</h2>
    </header>
    
    <br>
    <div class="flex flex-warp place-content-center">
        <div class="p-4 item-center justify-content">
            <table class="w-full border text-center bg-white">
                <thead>
                    <tr class="bg-gradient-to-r from-purple-500 to-red-400">
                        <th class="border">NO</th>
                        <th class="border">NPM</th>
                        <th class="border">Nama</th>
                        <th class="border">Jenis Kelamin</th>
                        <th class="border">Umur</th>
                        <th class="border">Hobi</th>
                        <th class="border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $sql = "SELECT * FROM data";
                $query = mysqli_query($db, $sql);
                
                while ($mahasiswa = mysqli_fetch_array($query)) {
                    echo "<tr class='border'>";
                    echo "<td class='border'>" . $mahasiswa['id'] . "</td>";
                    echo "<td class='border'>" . $mahasiswa['npm'] . "</td>";
                    echo "<td class='border'>" . $mahasiswa['nama'] . "</td>";
                    echo "<td class='border'>" . $mahasiswa['jenis_kelamin'] . "</td>";
                    echo "<td class='border'>" . $mahasiswa['usia'] . "</td>";
                    echo "<td class='border'>" . $mahasiswa['hobi'] . "</td>";
                    
                    echo "<td class='border'>";
                    echo "<a href='edit.php?id=" . $mahasiswa['id'] . "' class='text-blue-500'>Edit</a> | ";
                    echo "<a href='hapus.php?id=" . $mahasiswa['id'] . "' class='text-red-500'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <p class="mt-4 text-white">Total : <?php echo mysqli_num_rows($query) ?></p>
        <nav class="p-4">
            <button class="bg-green-500 text-white py-2 px-4 rounded"><a href="form-pengisian.php">Tambah Data</a></button>
        </nav>
    </div>
</div>


</body>

</html>
