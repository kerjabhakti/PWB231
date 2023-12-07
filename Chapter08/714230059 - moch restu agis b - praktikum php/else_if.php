<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>else if</title>
</head>
<body>
    <h2>penggunaan kontrol else if</h2>
    <?php
    $nilai=80;
    echo("nilai $nilai ");
    if($nilai>=05)
    {
    echo("grade A");
    }elseif(($nilai>=75)and($nilai<85))
    {
        echo("grade B");
    }elseif(($nilai>=65)and($nilai<75))
    {
        echo("grade C");
    }elseif(($nilai>=50)and($nilai<65))
    {
        echo("grade D");
    }elseif($nilai<50)
    {
        echo("grade E");
    }
    ?>
</body>
</html>