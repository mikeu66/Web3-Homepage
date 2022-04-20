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
            <b id="heading" >Contact Us!</b>
        </div>
    
    <div class="">
     <h1>Contact Page</h1>
     <form method = "POST">
         <p>
             <label>First Name: <input name = "firstname" type = "text" /></label>
         </p>
         <p>
             <label>Last Name: <input name = "lastname" type = "text" /></label>
         </p>
         <p>
             <label>Email: <input name = "email" type = "text" /></label>
         </p>
         <p>
             <input type = "submit" value = "Submit" />
             <input type = "reset" value = "Reset" />
         </p>
     </form>
    </div>
    
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