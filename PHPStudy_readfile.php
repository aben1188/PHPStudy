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

                $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

                // 输出单字符直到 end-of-file
                while(!feof($myfile)) {
                    $char = fgetc($myfile);
                    echo $char;

                    if ($char == "\r") echo "<br/>";
                }

                fclose($myfile);

                $myfile = fopen("testfile.txt", "w");

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

