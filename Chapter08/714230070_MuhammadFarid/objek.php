<html>
    <head>
        <title>Type data objek</title>
    </head>
    <body>
        <h2>Type data objek</h2>
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