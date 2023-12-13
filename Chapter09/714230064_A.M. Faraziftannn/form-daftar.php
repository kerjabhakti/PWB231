<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru | POLTEKPOS</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="Nama Lengkap" required>
            </p>
            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" required></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <select name="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kristen">Kristen</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" required>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar">
            </p>
        </fieldset>
    </form>
</body>
</html>