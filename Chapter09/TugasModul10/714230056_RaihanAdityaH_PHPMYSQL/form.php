<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Logic Coffe</title>
</head>
<body>
    <header>
        <h2>Formulir Logic Coffe</h2>
    </header>
    <form action="proses-pengisian.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">nama :</label>
                <input type="text" name="nama" placeholder="Nama Lengkap"/>
            </p>
            <p>
                <label for="umur">umur : </label>
                <select name="umur">
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                </select>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="laki-laki">Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="perempuan">Perempuan</label>           
            </p>
            <p>
                <label for="hobby">hobby : </label>
                <input type="text" name="hobby" placeholder="Hobby">     
            </p>
            <p>
                <label for="alasan">alasan : </label>
                <input type="text" name="alasan" placeholder="alasan lengkap">
            </p>
        <p>
        <label for="asal_lahir">kopi yang disuka : </label>
                <input type="text" name="asal_lahir" placeholder="lengkap">
        </p>
            <p>
                <input type="submit" value="Daftar" name="daftar">
            </p>
        </fieldset>
    </form>
</body>
</html>