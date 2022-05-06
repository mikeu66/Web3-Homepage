<?php 
$whereTo = "login.php";
session_start();
//echo $_COOKIE['username'];
$active = false;
if(isset($_COOKIE['username'])){
    $active = true;
    $username = $_COOKIE['username'];
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
            <b id="heading" >The Metaverse</b>
            <div id="rightbar">
                <table class = "loginInfo">
                    <td><?php echo "<a href='./profile.php'>$username</a>"; ?></td>
                </table>
            </div>
        </div>
        <div class="main">
        <div class="top">
            <a id="navleft" href="./crypto.php">CRYPTOCURRENCY</a>
            <a id="navmiddle" href="./meta.php">METAVERSE</a>
            <a id="navright" href="./nft.php">NFTs</a>
        </div>
        <div class = "mainMeta">
        <h2>What is the Metaverse?</h2>
        <p class="indent">
            The Metaverse is a collection of virtual worlds created by the company meta. 
            This virtual world will allow you to interact with people in real time and create a virtual life.
            These worlds are 3 dimensional and use virtual reality headsets to create an array of different virtual environments.
        </p>
        <h2>Why is the Metaverse Important? </h2>
        <p class="indent">
           The Metaverse has the potential to significantly change many aspects of life as we know it.
           People will be able to go to meetings, parties and even shop without leaving their home. 
        </p>
        </div>
        <div id="metavid">
            <h1 id="header2">Metaverse Explained</h1>
            <iframe src="https://www.youtube.com/embed/Uvufun6xer8" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        </div>
    </div>
    </body>
</html>

