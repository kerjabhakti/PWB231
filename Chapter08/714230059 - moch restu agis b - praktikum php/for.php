<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>
<h2>penggunaan Kontrol For</h2>
    <b>Nama Bulan : </b><br>
    <?php
    $bulan=array("Januari","Februari","maret","April","mei","juni","juli","agustus","september","oktober","november","desember");
    for($i=0;$i<count ($bulan);$i++)
    {
        echo(($i+1) ." $bulan[$i] <br>");
    }
    ?>
</body>
</html>