<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penyewaan Baju</title>
</head>
<body>
    <header>
        <h3> Formulir Penyewaan Baju Cosplay</h3>
    </header>

    <form action="proses-sewa.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="no Id">NO ID: </label>
                <input type="text" name="no_id" placeholder="Nomor ID" />
            </p>
            <p>
                <label for="alamat">Alamat: </label> 
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="no hp">No HP: </label>
                <input type="text" name="no_hp" placeholder="Nomor HP" />
            </p>
            <p>
                <label for="baju yang dipilih">Pilih Baju</label>
                <select name="baju yang dipilih">
                    <option>Kaguya Shinomiya</option>
                    <option>Kobo Kanaeru</option>
                    <option>Anya Forger</option>
                    <option>Hoshino Ai</option>
                    <option>Hitori Gotou</option>
                    <option>Nezuko</option>
                    <option>Yor Forger</option>
                    <option>Gawr Gura</option>
                    <option>Maid</option>
                    <option>Seifuku</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Sewa" name="sewa" />
            </p>
        </fieldset>
    </form>
</body>
</html>