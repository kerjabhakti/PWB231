<html>
    <head>
        <title>Bilangan Ganjil atau Genap</title>
    </head>
    <body>
        <h2>Menentukan Bilangan Ganjil atau Genap</h2>
        <?php 
    function cekGanjilGenap($angka) {
        if ($angka %2 == 0) {
            echo "Angka $angka adalah bilangan Genap." ;
        } else {
            echo "Angka $angka adalah bilangan Ganjil." ;
        }
    }
    $angka = 8;
         cekGanjilGenap($angka);
?>
    </body>
</html>