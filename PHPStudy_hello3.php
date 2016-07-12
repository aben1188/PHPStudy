<?php
    /**
     * Created by PhpStorm.
     * User: linyp
     * Date: 2016/06/17
     * Time: 12:07
     */
    ini_set('display_errors', 1);
    error_reporting(E_ALL | E_STRICT);

    $name = $_GET['name'];
    print "<p>Hello, <span style='font-weight: bold;'>$name</span>!</p>";