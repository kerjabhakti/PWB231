<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string="Pemrograman web php";
    $word=substr($string,16, 3);
    echo("<i>\"$string\"</i> <br>");
    echo("Hasil substr (16,3) adalah $word");
    ?>
</body>
</html>