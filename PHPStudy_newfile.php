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

                $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
                $txt = "Bill Gates\n";
                fwrite($myfile, $txt);
                $txt = "Steve Jobs\n";
                fwrite($myfile, $txt);
                
                fclose($myfile);
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

