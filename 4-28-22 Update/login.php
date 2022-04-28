<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //session_start();
    $username = $_POST["username1"];
    $password = $_POST["password1"];

    //Set cookies
    setcookie("username", $username, time()+3600);
    setcookie("password", $password, time()+3600);

    header('Location: index.php');
    //session_destroy();
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
        <div class = "login">
        <br>
        <br>
            <h1>Sign in    </h1>
            <form id = "login" method = "post" action = "./login.php">
                
                <p>
                    <label>Username: <input name = "username1" id = "username1" type = "text" /></label>
                </p>
                <p>
                    <label>Password: <input name = "password1" id = "password1" type = "text" /></label>
                </p>
                <p>
                    <input type = "submit" id = "submit" value = "Submit" />
                    <input type = "reset" value = "Reset" />
                </p>
            </form>
        </div>
    </body>
</html>
