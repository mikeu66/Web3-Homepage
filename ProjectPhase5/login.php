<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Set cookies
    setcookie("username", $username, time()+3600);
    setcookie("password", $password, time()+3600);

    header('Location: index.php');
    session_destroy();
}
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <link rel = "stylesheet" href = "./style.css">
        <script src=  "./script.js"></script>
    </head>
    <body>
        <div class="header">
            <img id="logo" src="./logo.png" alt="longhorn" onClick="redirect()">
            <b id="heading" >Login</b>
        </div>
        <div class = "login">
            <h1>Sign in/Create Account</h1>
            <form method = "post" action = "login.php">
                <p>
                    <label>Username: <input name = "username" type = "text" /></label>
                </p>
                <p>
                    <label>Password: <input name = "password" type = "text" /></label>
                </p>
                <p>
                    <input type = "button" value = "Submit" />
                    <input type = "reset" value = "Reset" />
                </p>
            </form>
        </div>
    </body>
</html>
