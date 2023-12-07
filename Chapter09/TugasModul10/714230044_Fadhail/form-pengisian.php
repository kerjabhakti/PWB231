<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengisian Data Hobi Mahasiswa</title>
</head>
<body>
    <header>
        <h2>Pengisian Data Hobi Mahasiswa</h2>
    </header>
    <form action="proses-pengisian.php" method="POST">
        <fieldset>
            <p>
                <label for="npm">NPM :</label>
                <input type="text" name="npm" placeholder="npm"/>
            </p>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="Nama Lengkap"/>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="laki-laki">Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="perempuan">Perempuan</label>           
            </p>
            <p>
                <label for="usia">Usia : </label>
                <select name="usia">
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
                    <option>29</option>
                    <option>30</option>
                </select>
            </p>
            <p>
                <label for="hobi">Hobi : </label>
                <input type="text" name="hobi" placeholder="Hobi">
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar">
            </p>
        </fieldset>
    </form>
</body>
</html>