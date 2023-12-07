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

<form action="proses-daftar.php" method="POST">
    <fieldset>
    <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap"/>
    </P>
    <p>
    <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
</P>
<p>
    <label for="jenis_kelamin">Jenis Kelamin: </label>
    <label><input type="radio" name="Jenis Kelamin" value="laki-laki"> Laki-laki</label>
    <label><input type="radio" name="Jenis Kelamin" value="perempuan"> Perempuan</label>
</P>
<p>
    <label for="agama">Agama: </label>
         <select name="agama">
            <option>Islam</option>
            <option>Kristen</option>
            <option>Hindu</option>
            <option>Budha</option>
            <option>Atheis</option>
</select>
</P>
<p>
    <label for="sekolah_asal">Sekolah Asal: </label>
          <input type="text" name="sekolah_asal" placeholder="nama sekolah"/>
</P>
<p>
<input type="submit" value="Daftar" name="daftar">
</p>
</fieldset>
</form>
</body>
</html>