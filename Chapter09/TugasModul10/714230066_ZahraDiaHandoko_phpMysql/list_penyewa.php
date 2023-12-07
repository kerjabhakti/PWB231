<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Baju</title>
</head>
</body>
    <header>
        <h3>penyewaan Baju Cosplay</h3>
    </header>
    <nav>
        <a href="form_sewa.php">[+] Tambah Data</a>
    </nav>
    <br>
    <table border="1">
    <thead>
        <tr>
            <th>No ID</tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Baju Yang Dipilih</th>
        </tr>
</thead>
<tbody>
    <?php
    $sql="SELECT*FROM baju_cosplay";
    $query = mysqli_query($db,$sql);
    while($penyewa=mysqli_fetch_array($query)){
        echo"<tr>";
        echo "<td>".$penyewa['no_id']."</td>";
        echo "<td>".$penyewa['nama']."</td>";
        echo "<td>".$penyewa['alamat']."</td>";
        echo "<td>".$penyewa['no_telepon']."</td>";

        echo "<td>";
        echo "<a href='form_edit.php?id=" . $penyewa['id'] . "'> Edit </a> |";
        echo "<a href='hapus.php?id=".$penyewa['id']."'>Hapus</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>