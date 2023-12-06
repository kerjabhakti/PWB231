<html lang="en">
<head>
    <title>Jumlah Bilangan Genap</title>
</head>
<body>
    <h2>Jumlah Bilangan Genap dari 0 hingga 6</h2>
    <?php
    $jumlah = 0;
    for ($i = 0; $i <= 6; $i += 2) {
        $jumlah += $i;
    }
    echo "<p>Jumlah bilangan genap dari 0 hingga 6 adalah: $jumlah</p>";
    ?>
</body>
</html>