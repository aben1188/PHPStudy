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
                print "<h1 style='color: red'>Hello, world!</h1>";

                $txt1 = "Learn PHP!";
                $txt2 = "W3School.com.cn";
                $cars = array("Volvo", "BMW", "SAAB");

                echo $txt1;
                echo "<br/>";
                echo "<br/>";
                echo "Study PHP at $txt2.";
                echo "<br/>";
                echo "<br/>";
                echo "My car is a {$cars[0]}.";
                echo "<br/>";
                echo "<br/>";
                $a = 'Hello';
                $a .= ' world!';
                echo '$a: '.$a;
                echo "<br/>";
                echo "<br/>";

                $x = 5985;
                var_dump($x);
                echo "<br/>";
                $x = -345; // 负数
                var_dump($x);
                echo "<br/>";
                $x = 0x8C; // 十六进制数
                var_dump($x);
                echo "<br/>";
                $x = 047; // 八进制数
                var_dump($x);
                echo "<br/>";
                $x = 10.365;
                var_dump($x);
                echo "<br/>";
                $x = 2.4e3;
                var_dump($x);
                echo "<br/>";
                $x = 8E-5;
                var_dump($x);
                echo "<br/>";
                $x = "hello"; // 字符串
                var_dump($x);
                echo "<br/>";
                $x = true; // 布尔值
                var_dump($x);
                echo "<br/>";
                $cars = array("Volvo", "BMW", "SAAB");
                var_dump($cars);
                echo "<br/>";
                $arr = ['Hello', 23, false];
                var_dump($arr);

                $x=100;
                $y="100";
                echo '$x = 100;';
                echo "<br>";
                echo '$y = "100";';
                echo "<br>";
                echo '$x == $y: ';
                var_dump($x == $y);
                echo "<br>";
                echo '$x === $y: ';
                var_dump($x === $y);
                echo "<br>";
                echo '$x != $y: ';
                var_dump($x != $y);
                echo "<br>";
                echo '$x !== $y: ';
                var_dump($x !== $y);
                echo "<br>";

                $a=50;
                $b=90;
                var_dump($a > $b);
                echo "<br>";
                var_dump($a < $b);

                $x = array("a" => "red", "b" => "green");
                $y = array("c" => "green", "d" => "yellow");
                $z = $x + $y; // $x 与 $y 的联合
                var_dump($z);
                echo "<br>";
                var_dump($x == $y);
                echo "<br>";
                var_dump($x === $y);
                echo "<br>";
                var_dump($x != $y);
                echo "<br>";
                var_dump($x <> $y);
                echo "<br>";
                var_dump($x !== $y);
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

