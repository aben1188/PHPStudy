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

                //echo var_dump($_SERVER);
                echo var_dump($_FILES);
                echo "<br/>";
                echo "<br/>";

//                echo var_dump($GLOBALS);
//                echo "<br/>";
//                echo "<br/>";

//                echo $_SERVER['PHP_SELF'];  //返回当前执行脚本的文件名
//                echo "<br>";
//                echo $_SERVER['SERVER_NAME'];  //返回当前运行脚本所在的服务器的主机名（比如 www.w3school.com.cn）
//                echo "<br>";
//                echo $_SERVER['HTTP_HOST'];  //返回来自当前请求的 Host 头
//                //echo "<br>";
//                //echo $_SERVER['HTTP_REFERER'];  //返回当前页面的完整 URL（不可靠，因为不是所有用户代理都支持）
//                echo "<br>";
//                echo $_SERVER['SERVER_ADDR'];  //返回当前运行脚本所在的服务器的 IP 地址
//                echo "<br>";
//                echo $_SERVER['HTTP_USER_AGENT'];  //用户代理：浏览器类型及版本、操作系统及版本、浏览器内核等信息的标识
//                echo "<br>";
//                echo $_SERVER['SCRIPT_NAME'];  //返回当前脚本的路径
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

