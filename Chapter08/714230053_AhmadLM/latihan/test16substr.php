<html>
<head>
<title>String substr</title>
</head>
<body>
    <h2>Penggunaan String substr()</h2>
        <?php
            $string="Pemrograman Web PHP";
            $word=substr ($string, 16, 3);
            echo ("<i>\"$string\"</i> <br>");
            echo ("Hasil substr (16, 3) adalah $word");
        ?>
</body>
</html>