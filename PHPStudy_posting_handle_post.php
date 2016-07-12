<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Forum Posting</title>
    </head>

    <body>
        <?php // Script 5.2 - handle_post.php
            /* This script receives five values from posting.html:
            first_name, last_name, email, posting, submit */

            // Address error management, if you want.

            // Get the values from the $_POST array:
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $posting = $_POST['posting'];
            $posting_nl2br = nl2br($_POST['posting']);
//            $posting_htmlentities_nl2br = nl2br(htmlentities($_POST['posting']));
//            $posting_htmlspecialchars = htmlspecialchars($_POST['posting']);
//            $posting_striptags_nl2br = nl2br(strip_tags($_POST['posting']));

            // Create a full name variable:
            $name = $first_name.' '.$last_name;

            // Print a message:
//          print "<div>Thank you, $name, for your posting:
//                <p>original: $posting</p>
//                <p>nl2br: $posting_nl2br</p>
//                <p>htmlentities_nl2br: $posting_htmlentities_nl2br</p>
//                <p>htmlspecialchars: $posting_htmlspecialchars</p>
//                <p>striptags_nl2br: $posting_striptags_nl2br</p></div>";
            print "<div>Thank you, $name, for your posting: 
                <p>$posting_nl2br</p></div>";

            $name = urlencode($name);
            $email = urlencode($_POST['email']);
            print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">
                here</a> to continue.</p>";
        ?>
    </body>
</html>