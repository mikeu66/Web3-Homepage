<?php

    session_start();
    function log_out(){
        setcookie('username', '', 1);
        setcookie('password', '', 1);
        header('Location: index.php');
    }

    if(isset($_POST['logout'])) {
        log_out();
        
        
    }
    if(isset($_POST['delete'])) {
        $server = "spring-2022.cs.utexas.edu";
        $user   = "cs329e_bulko_mikeu66";
        $pwd    = "Yeah\$Nobel!Plot";
        $dbName = "cs329e_bulko_mikeu66"; 
        
        $mysqli = new mysqli ($server,$user,$pwd,$dbName);

        $username = $_COOKIE['username'];


        $command = "DELETE FROM passwords WHERE username = '".$username."'";


        $result = $mysqli->query($command);
        if (!$result) {
            die("Query failed: ($mysqli->error <br> SQL command = $command");
        }
        
    }
    //if(isset($_POST['delete'])) {
    //    echo "<script> alert('Account Deleted') </script>";
    //}
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Profile</title>
        <link rel = "stylesheet" href = "./style.css">
        <script src=  "./script.js" defer></script>
    </head>
    <body>
        <div class="header">
            <img id="logo" src="./logo.png" alt="longhorn" onClick="redirect()">
            <b id="heading" >Deep Dive: Web3 & Metaverse</b>
        </div>
        <form id = "profileForm" method = "post">
            <h1 id = "profileHeader" >Profile</h1>
            <table id = "profileTable">
                <tr>
                    <td><button type="submit" value = "logout" class = "logout" name = "logout"> Log out </button></td>
                    <td><button type="submit" value = "delete" class = "delete" name = "delete"> Delete Account </button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

