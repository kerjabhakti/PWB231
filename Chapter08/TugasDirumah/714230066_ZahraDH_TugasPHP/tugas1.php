<html>
    <head>
        <title>Cek Bilangan Gajil atau Genap</title>
    </head>
    <body>
        <h2>Cek Bilangan Ganjil atau Genap</h2>
        <?php
        // Fungsi Cek Bilangan Ganjil atau Genap
        function cekGanjilGenap($angka)
        {
            if($angka %2 == 0) 
            {
                return "Genap";
            } else{
                return "Ganjil";
            }
        }
        // Memeriksa apakah folmulir dikirimkan
        if
        ($_SERVER["REQUEST_METHOD"]== "POST"){
            // Mengambil nilai angka dari formulir
            $inputAngka =
            $_POST["angka"];
            //  memastikan bahwa input adalah angka
            if (is_numeric($inputAngka)){
                // menentukan apakah angka tersebut ganjil atau genap
                $hasil =
                cekGanjilGenap($inputAngka);
                // menapilkan hasil
                echo "<p>Input bukan angka. silahkan masukan angka.</p>";
            }
        }
        ?>
    </body>
</html>