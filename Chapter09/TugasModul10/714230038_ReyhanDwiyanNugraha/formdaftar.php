<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
</head>
<body>
    <header>
        <h3>Formulis Pendaftaran Mahasiswa Baru | ULBI</h3>
    </header>

    <form action="prosesdaftar.php" method="POST">
        <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jeniskelamin">Jenis Kelamin: </label>
            <label><input type=:"radio" name="jeniskelamin" value="laki-laki"> Laki-laki</label>
            <label><input type=:"radio" name="jeniskelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Konghuchu</option>
            </select>
        </p>
        <p>
            <label for="sekolahasal">Sekolah Asal: </label>
            <input type="text" name="sekolahasal" placeholder="namasekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>