<?php
    if(!isset($_SESSION['username'])) {
    die("Please login");
}

?>
<html>
<head><link rel="stylesheet" type="text/css" href="css.css"></head>
    <body>
            <div id="div1">

                <a href="index.php" id="home">Home</a>
                <a href="login.php" id="login2">Login</a>
                <a href="register_parse.1.php" id="register">Register</a> 

        </div>
        <form action="/log_out.php" method="get">
            <input type="submit" name="submit" value="log Out." action="http://localhost/logout.php" id="logout">
        </form>
    </body>
</html>
<?php

?>