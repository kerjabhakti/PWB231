<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN 1</title>
</head>
<body>
<h2>Latihan 1</h2>

<?php
$angka=2;
echo("$angka adalah bilangan");
    function check($angka){
        if ($angka % 2 == 0)
        {
            echo(" Genap");
        }else
        {
            echo(" Ganjil");
        }
    }
check($angka)
?>

</body>
</html>