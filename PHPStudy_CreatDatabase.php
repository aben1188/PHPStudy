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
                $con = mysqli_connect("localhost","root","118899");
                if (!$con)
                {
                    die('Could not connect: ' . mysqli_error());
                }

                if (mysqli_query("CREATE DATABASE my_db",$con))
                {
                    echo "Database created";
                }
                else
                {
                    echo "Error creating database: " . mysqli_error();
                }

                mysqli_close($con);
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

