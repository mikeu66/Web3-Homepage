<?php  
session_start();
//echo $_COOKIE['username'];
$active = false;
if(isset($_COOKIE['username'])){
    $active = true;
    $username = $_COOKIE['username'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <link rel = "stylesheet" href = "./style.css">
        <script src=  "./script.js"></script>
     </head> 
 
     <body>
        <div class="header">
            <img id="logo" src="./logo.png" alt="longhorn" onClick="redirect()">
            <b id="heading" >Deep Dive: Web3 & Metaverse</b>
            <div id="rightbar">
                <table class = "loginInfo">
                    <td><?php echo "<a href='./profile.php'>$username</a>"; ?></td>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    
     
     <form id = "contactForm"method = "POST">
     <h1 id = "contactHeader" >Contact Us!</h1>
        <table id = "contactTable">
            <tr>
                <td><label>First Name:</label></td><td><input name = "firstname" type = "text" /></td>
            </tr>
            <tr>
                <td><label>Last Name:</label></td><td><input name = "lastname" type = "text" /></td>
            </tr>
            <tr>
                <td><label>Email:</label></td><td><input name = "email" type = "text" /></td>
            </tr>
            </table>
            <p>
                <input type = "submit" class = "loginButton" value = "Submit" />
                <input type = "reset" class = "loginButton" value = "Reset" />
            </p>
        
     </form>
</body>
</html>

<?php
if (isset($_POST['firstname'])) {
    $dataf = $_POST['firstname'];
    $datal = $_POST['lastname'];
    $datae = $_POST['email'];
    $data = $dataf.":".$data1."@".$datae;
    $fp = fopen('data.txt', 'a');
    fwrite($fp, $data);
    fclose($fp);

}

?>