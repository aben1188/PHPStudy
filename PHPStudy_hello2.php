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
                $cars[0] = "Volvo";
                $cars[1] = "BMW";
                $cars[5] = "SAAB";

                //foreach ($cars as $car) {echo "$car<br/>";};
                var_dump($cars);
                foreach ($cars as $car) {
                    var_dump($car);
                };
                echo 'count($cars): '.count($cars);
                echo '<br/>';
                echo '<br/>';

                echo __line__;
                echo '<br/>';
                echo __LINE__;
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

