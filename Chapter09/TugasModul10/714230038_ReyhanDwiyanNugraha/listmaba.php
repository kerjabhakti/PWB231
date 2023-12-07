<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasaiswa Baru</h3>
    </header>

    <nav>
        <a href="formdaftar.php">[+] Tambah Data</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql ="SELECT * FROM maba";
            $query = mysqli_query($db, $sql);

            while($maba = mysqli_fetch_array($query)){
                echo"<tr>";
                echo"<td>".$maba['no']."</td>";
                echo"<td>".$maba['nama']."</td>";
                echo"<td>".$maba['alamat']."</td>";
                echo"<td>".$maba['jeniskelamin']."</td>";
                echo"<td>".$maba['agama']."</td>";
                echo"<td>".$maba['sekolahasal']."</td>";

                echo"<td>";
                echo"<a href='formedit.php?id=".$maba['no']."'>Edit</a> | ";
                echo"<a href='hapus.php?id=".$maba['no']."'>Hapus</a>";
                echo"</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total:<?php echo mysqli_num_rows($query)?></p>
    </body>
</html>