<?php

function log_out(){
    unset($_COOKIE['username']);
    unset($_COOKIE['password']);
}

if(isset($_POST['logout'])) {
    echo "eeeee";
    log_out();
}
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <link rel = "stylesheet" href = "./style.css">
        <script src=  "./script.js" defer></script>
    </head>
    <body>
        <div class="header">
            <img id="logo" src="./logo.png" alt="longhorn" onClick="redirect()">
            <b id="heading" >Login</b>
        </div>
        <div class = "profile">
            <form method = "post" action = "./login.php">
                <h1>Profile    </h1>
                <button type="submit" value = "logout" class = "logout" name = "logout"> Log out </button>
            </form>
        </div>
    </body>
</html>
