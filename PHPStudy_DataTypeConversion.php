<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Hello, World!</title>
    </head>

    <body>
        <p>The following was created by PHP:
            <?php
                echo "<br/>";
                echo "<br/>";

                $num1 = 3.14;
                $num2 = (int)$num1;
                var_dump($num1);  //输出float(3.14)
                var_dump($num2);  //输出int(3)
            ?>
        </p>

        <style>
            p {
                color: olivedrab;
                font-weight: bold;
            }
        </style>
    </body>
</html>

