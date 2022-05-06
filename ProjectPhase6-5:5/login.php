<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Set cookies
    

    

    

    //header('Location: index.php');
    //session_destroy();
    if(isset($_POST['submit'])) {
        $server = "spring-2022.cs.utexas.edu";
        $user   = "cs329e_bulko_mikeu66";
        $pwd    = "Yeah\$Nobel!Plot";
        $dbName = "cs329e_bulko_mikeu66"; 
        
        $mysqli = new mysqli ($server,$user,$pwd,$dbName);

        $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
        $password = mysqli_real_escape_string($mysqli, $_POST["password"]);

        $command = "SELECT * FROM passwords WHERE username = '".$username."' AND passwrd = '".$password."'";
        //echo "<br><br><br>";
        //echo $username;
        //echo $password;
        //echo $command;
        $result = $mysqli->query($command);
        if (!$result) {
            die("Query failed: ($mysqli->error <br> SQL command = $command");
        }
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if ($username == $row['username'] && $password == $row['passwrd']){
                    //echo "<script> alert('Successful'); </script>";
                    setcookie("username", $username, time()+3600);
                    header('Location: index.php');
                }
                
            }
        }
        else {
            echo "<script> alert('Invalid'); </script>";
        }
        
    }
    
//}
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Sign In</title>
        <link rel = "stylesheet" href = "./style.css">
        <script src=  "./script.js" defer></script>
    </head>
    <body>
        <div class="header">
            <img id="logo" src="./logo.png" alt="longhorn" onClick="redirect()">
            <b id="heading" >Deep Dive: Web3 & Metaverse</b>
        </div>
        <br>
        <br>
            <form id = "login" method = "post">
                <h1 id = "loginHeader" >Sign in    </h1>
                <table id = "loginTable">   
                    <tr>
                        <td><label>Username: </label></td><td><input name = "username" id = "username1" type = "text" /></td>
                    </tr>
                    <tr>
                        <td><label>Password: </label></td><td><input name = "password" id = "password1" type = "password" /></td>
                    </tr>
                    </table>
                    <p>
                        <button type="submit" class = "loginButton" name = "submit"> Submit </button>
                        <button type = "reset" class = "loginButton" value = "Reset" name = "reset">Reset</button>
                    </p>
                    <a href = "./create.php" class = "center" >Don't have an account? Click here to create one</a>
                
            </form>
    </body>
</html>
