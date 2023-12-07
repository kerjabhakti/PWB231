<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi : Stringt</title>
</head>
<body>
    <h2>fungsi : String substr()</h2>
    <?php
    $string="Pemograman web PHP";
    $word=substr ($string,16,3);
    echo ("<i>\"$string\"</i> <br>");
    echo ("Hasil output (16,3) adalah PHP"); ?>
</body>
</html>