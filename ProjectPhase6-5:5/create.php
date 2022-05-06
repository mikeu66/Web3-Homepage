<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Set cookies
    

    

    

    //header('Location: index.php');
    //session_destroy();
    if(isset($_POST['Submit'])) {
        $server = "spring-2022.cs.utexas.edu";
        $user   = "cs329e_bulko_mikeu66";
        $pwd    = "Yeah\$Nobel!Plot";
        $dbName = "cs329e_bulko_mikeu66"; 
        
        $mysqli = new mysqli ($server,$user,$pwd,$dbName);

        $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
        $password = mysqli_real_escape_string($mysqli, $_POST["password"]);

        $command = "SELECT * FROM passwords WHERE username = '".$username."'";
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
            //echo "<script> alert('Username is taken'); </b>";
            //echo "<script> alert('Username is taken') </b>";
        }
        else {
            $insert_command = "INSERT INTO passwords (username, passwrd) VALUES ('$username', '$password')";
            $insert_result = $mysqli->query($insert_command);
            setcookie("username", $username, time()+3600);
            header('Location: index.php');
        }

        echo "<br><br><br> $insert_command";

        
    }
    
//}
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Create Account</title>
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
            <br>
            <br>
            
            <form id = "createForm" method = "post">
                <h1 id = "createHeader">Create an Account</h1>
                <table id = "createTable">
                    <tr>
                        <td><label>Username:</label></td><td><input name = "username" id = "username" placeholder = "contains only numbers and digits"  type = "text" size = "30" /> </td>
                    </tr>
                    <tr>
                        
                        <td> <label>Password:  </label></td><td><input name = "password" id = "password" placeholder = "1 lower, 1 upper, 1 digit." type = "password" size = "30" /> </td>
                    </tr>
                    <tr>
                        <td> <label>Repeat Password:</label></td> <td><input name = "password2" id = "password2" placeholder = "1 lower, 1 upper, 1 digit." type = "password" size = "30" /> </td>
                    </tr>
                    </table>
                    <p>
                        <button type = "button" class = "loginButton" name = "Submit" id = "SubmitButton" value = "Submit">Submit</button>
                        <button type = "reset" class = "loginButton" name = "reset">Reset</button>
                    </p>
                
                
            </form>
            <p class = "center">
                <a href = "./login.php" class = "center" >Already have an account? Click here to log in</a>
            </p>
    </body>
</html>
