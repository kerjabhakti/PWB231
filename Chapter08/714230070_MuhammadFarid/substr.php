<html>
    <head>
        <title>fungsi : string</title>
    </head>
    <body>
        <h2>fungsi : string substr()</h2>
        <?php
        $string="Pemrograman web PHP";
        $word=substr($string,16,3);
        echo ("<i>\"$string\"</i> <br>");
        echo ("Hasil substr (16,3) adalah $word");
        ?>
    </body>
</html>