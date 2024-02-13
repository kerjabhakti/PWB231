<html>
    <head>
        <title>while</title>
    </head>
    <body>
        <h2>Penggunaan kontrol while</h2>
        <?php
        $hari=array("Senin" , "Selasa" , "Rabu" , "Kamis" , "Jumat" , "Sabtu" , "Minggu");
        $i=0;
        while($i<count($hari))
        {
            echo(" hari ke ". ($i+1)." adalah ".$hari[$i]. "<br>");
            $i++;
        }
        ?>
    </body>
</html>