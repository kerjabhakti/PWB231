<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hobi Kelas 1B</title>
</head>
<body>
    <header>
        <h2>List Hobi Mahasiswa</h2>
    </header>
    
    <nav>
        <button><a href="form-pengisian.php">[+] Tambah Data</a></button>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM data";
            $query = mysqli_query($db, $sql);

            while ($mahasiswa = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $mahasiswa['npm'] . "</td>";
            echo "<td>" . $mahasiswa['nama'] . "</td>";
            echo "<td>" . $mahasiswa['jenis_kelamin'] . "</td>";
            echo "<td>" . $mahasiswa['usia'] . "</td>";
            echo "<td>" . $mahasiswa['hobi'] . "</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$mahasiswa['npm']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$mahasiswa['npm']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
            }
        ?>
        </tbody>
        </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
    </body>
</html>