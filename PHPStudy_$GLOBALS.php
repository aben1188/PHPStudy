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
                echo '<br/>';
                echo '<br/>';

                $x = 75;
                $y = 25;

                function addition() {
                    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                    echo '$GLOBALS["z"]: '.$GLOBALS['z'];
                }
                addition();
                echo '<br/>';
                echo '<br/>';
                echo '$z: '.$z;
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

