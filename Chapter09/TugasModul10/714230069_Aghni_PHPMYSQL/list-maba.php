<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pendaftaran Mahasiswa Baru</title>
</head>
<body class="bg-amber-50">
    <header>
    <div class="bg-rose-900 text-center text-2xl font-bold text-white p-4">
        <h3>Pendaftaran Mahasiswa baru</h3>
    </div>
    </header>

    <div class="ml-10 pt-4">
    <nav>
        <a class="text-white bg-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800" href="form-daftar.php">[+] Tambah baru</a>
    </nav>
    </div>
    
    <br>
    <div class="ml-10">
    <table class="border-collapse border-2 border-gray-500">
        <thead class="">
            <tr>
                <th class="border border-gray-400 p-4">No</th>
                <th class="border border-gray-400 p-4">Nama</th>
                <th class="border border-gray-400 p-4">Alamat</th>
                <th class="border border-gray-400 p-4">Jenis Kelamin</th>
                <th class="border border-gray-400 p-4">Agama</th>
                <th class="border border-gray-400 p-4">Sekolah</th>
                <th class="border border-gray-400 p-4">Aksi</th>
            </tr>
        </thead>
        <tbody class="border-collapse border-2 border-gray-500">
            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db,$sql);

            while($maba = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$maba['id']."</td>";
                echo "<td>".$maba['nama']."</td>";
                echo "<td>".$maba['alamat']."</td>";
                echo "<td>".$maba['jenis_kelamin']."</td>";
                echo "<td>".$maba['agama']."</td>";
                echo "<td>".$maba['sekolah_asal']."</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=".$maba['id']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$maba['id']."'>Hapus</a> ";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    
</body>
</html>