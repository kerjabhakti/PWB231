<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Logic Coffe</title>
</head>
<body>
    <header>
        <h2>Formulir Logic Coffe</h2>
    </header>

    <nav>
        <button><a href="form.php">[+] Tambah Data</a></button>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Hobby</th>
                <th>Alasan</th>
                <th>kopi yang disuka</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM data";
            $query = mysqli_query($db, $sql);

            while ($mahasiswa = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $mahasiswa['nama'] . "</td>";
            echo "<td>" . $mahasiswa['umur'] . "</td>";
            echo "<td>" . $mahasiswa['jenis_kelamin'] . "</td>";
            echo "<td>" . $mahasiswa['hobby'] . "</td>";
            echo "<td>" . $mahasiswa['alasan'] . "</td>";
            echo "<td>" . $mahasiswa['asal_lahir'] . "</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$mahasiswa['nama']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$mahasiswa['nama']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
            }
        ?>
        </tbody>
        </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
    </body>
</html>