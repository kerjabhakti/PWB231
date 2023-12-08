<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran Mahasiswa Baru | POLTEKPOS</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru | POLTEKPOS</h3>
    </header>
    <form action="proses-pendaftaran.php"> method="POST"
        <fieldset>
            <p>
                <Label>for-"nama">Nama: </Label>
                <input type="text" nama="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="agama">Agama</label>
                <select name="Agama">
                    <option>islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal</label>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>

</html>