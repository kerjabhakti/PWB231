<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengisian Data Hobi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-indigo-500 to-purple-400 p-4">
    <form action="proses-pengisian.php" method="POST" class="max-w-md mx-auto mt-8 bg-white p-8 border rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Pengisian Data Hobi Mahasiswa</h2>
        <fieldset>
            <p class="mb-4">
                <label for="npm" class="block text-sm font-medium text-gray-600">NPM :</label>
                <input type="text" name="npm" placeholder="npm" class="border rounded-md p-2 w-full"/>
            </p>
            <p class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-600">Nama : </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" class="border rounded-md p-2 w-full"/>
            </p>
            <p class="mb-4">
                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-600">Jenis kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="Laki-laki">Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" for="jenis_kelamin" value="Perempuan">Perempuan</label>           
            </p>
            <p class="mb-4">
                <label for="usia" class="block text-sm font-medium text-gray-600 mb-1">Usia :</label>
                <select name="usia" class="border rounded-md p-2">
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
            <p class="mb-4">
                <label for="hobi" class="block text-sm font-medium text-gray-600">Hobi : </label>
                <input type="text" name="hobi" placeholder="Hobi" class="border rounded-md p-2 w-full">
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" class="bg-blue-500 text-white py-2 px-4 rounded-md cursor-pointer">
            </p>
        </fieldset>
    </form>
</body>
</html>
