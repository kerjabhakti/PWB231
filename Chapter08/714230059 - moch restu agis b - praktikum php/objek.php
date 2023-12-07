<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipe data objek</title>
</head>
<body>
    <h2>tipe data objek</h2>
    <?php 
        class test
        {
            var $str="Variabel Class";
            function set_vars($str)
            {
                $this->str=$str;
            }
        }
    $class=new test;
    echo $class->str;
    $class->set_vars("Variabel Objek");
    echo ("<br>");
    echo $class->str;
    ?>
</body>
</html>