<?php

include("config.php");

//kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-maba.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
}

?>

<!DOCTYPE html>
<html>

<head>
    <title> Formulir Edit Maba |POLTEKPOS| </title>
</head>

<body>
    <header>
        <h3>Formulir Edit Maba </h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $maba['id'] ?>" />

            <p>
                <label for="nama">nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $maba['nama'] ?>" />
            </p>
            <P>
                <label for="alamat">alamat: </label>
                <textarea name="alamat"><?php echo $maba['alamat'] ?></textarea>
            </P>
            <p>
                <label for="jenis_kelamin">Jenis kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="laki-laki">Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="perempuan">Perempuan</label>
            </p>
            <p>
                <label for="agama">agama: </label>
                <?php $agama = $maba['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                </select>
            </p>
            <P>
                <label for="sekolah_asal"> sekolah_asal</label>
                <input type="text" name="sekolah_asal" placeholder="nama_sekolah" value="<?php echo $maba['sekolah_asal'] ?>" />
            </P>
            <p>
                <input type="submit" value="simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>

</html>