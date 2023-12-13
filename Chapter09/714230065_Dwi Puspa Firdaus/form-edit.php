<?php
include("config.php");

if( !isset($_GET['id'])) {
header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

    <fieldset>
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label> <input type="radio" name="jenis_kelamin"  value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label> <input type="radio" name="jenis_kelamin"  value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> perempuan</label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'islam') ? "selected": '' ?>>Islam</option>
                <option <?php echo ($agama == 'kristen') ? "selected": '' ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": '' ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": '' ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": '' ?>>Atheis</option>
</select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
</p>
<p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

</fieldset>

</form>

</body>
</html>