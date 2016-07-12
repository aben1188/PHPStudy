<html>
    <body>
        Welcome <?php echo !empty($_POST["name"]) ? $_POST["name"] : null; ?><br>
        Your email address is: <?php echo !empty($_POST["email"]) ? $_POST["email"] : null; ?>
    </body>
</html>