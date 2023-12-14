<?php

include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-maba.php');
}

//ambil id dari query string
$id=$_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak ditemukan
if(mysqli_num_rows($query) <1){

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Formulir Edit Maba |ULBI| </title>
    </head>

    <body>
        <header>
            <h3>Formulir Edit Maba </h3>
        </header>

        <form action="proses-edit.php" method="POST">

        <fieldset>

        <input type="hidden" name="id" value="<?php echo $penyewa['id'] ?>" />

        <p>
            <label for="nama">nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $penyewa['nama'] ?>" />
        </p>
        <P>
            <label for="alamat">alamat: </label>
            <textarea name="alamat"><?php echo $penyewa['alamat'] ?></textarea>
        </P>
        <p>
            <label for="agama">agama: </label>
            <?php $pilihbaju = $mbaa['agama']; ?>
            <select name="agama">
                <option <?php echo ($pilihbaju == 'Kaguya Shinomiya') ? "selected": "" ?>>Kaguya Shinomiya</option>
                <option <?php echo ($pilihbaju == 'Kobo Kanaeru') ? "selected": "" ?>>Kobo Kanaeru</option>
                <option <?php echo ($pilihbaju == 'Anya Forger') ? "selected": "" ?>>Anya Forger</option>
                <option <?php echo ($pilihbaju == 'Hoshino Ai') ? "selected": "" ?>>Hoshino Ai</option>
                <option <?php echo ($pilihbaju == 'Hitori Gotou') ? "selected": "" ?>>Hitori Gotou</option>
                <option <?php echo ($pilihbaju == 'Nezuko') ? "selected": "" ?>>Nezuko</option>
                <option <?php echo ($pilihbaju == 'Yor Forger') ? "selected": "" ?>>Yor Forger</option>
                <option <?php echo ($pilihbaju == 'Gawr Gura') ? "selected": "" ?>>Gawr Gura</option>
                <option <?php echo ($pilihbaju == 'Maid') ? "selected": "" ?>>Maid</option>
                <option <?php echo ($pilihbaju == 'Seifuku') ? "selected": "" ?>>Seifuku</option>
        </p>
        <p>
            <input type="submit" value="simpan" name="simpan" />
        </p>
        </fieldset>
    </form>
    </body>
</html>