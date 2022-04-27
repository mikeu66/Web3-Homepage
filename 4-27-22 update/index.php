<?php 
$whereTo = "login.php";
session_start();
//echo $_COOKIE['username'];
$active = false;
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
    $active = true;
    $username = $_COOKIE['username'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Deep Dive: Web3 & Metaverse</title>
        <link rel="stylesheet" href="./style.css">
        <script src= "./script.js"></script>
    </head>
    <body>
        <div class="header">
            <img id="logo" src="./logo.png" alt="longhorn" onClick="redirect()">
            <b id="heading" >Deep Dive: Web3 & Metaverse</b>
            <div id="rightbar">
                <table class = "loginInfo">
                    <td id = "login"><a href="./login.php">Sign in</a></td>
                    <td id = "create"><a href="./create.html">Create Account</a></td>
                    <td><?php echo "<a href='./profile.php'>$username</a>"; ?></td>
                </table>
            </div>
        </div>
        <div class="main">
            <div class="top">
                <a id="navleft" href="<?php if ($active == true) { echo "./crypto.html ";} else {echo $whereTo;} ?>">CRYPTOCURRENCY</a>
                <a id="navmiddle" href="<?php if ($active == true) { echo "./meta.html ";} else {echo $whereTo;} ?>">METAVERSE</a>
                <a id="navright" href="<?php if ($active == true) { echo "./nft.html ";} else {echo $whereTo;} ?>">NFTs</a>
            </div>
            <h1>What is Web3?</h1>
            <h3>Overview</h3>
            <div class="h3info">
                <ul>
                    <li>Web3 is a term used to refer to the next iteration of the internet.</li>
                    <br>
                    <li>Web3 will be a decentralized internet built with blockchain technology. It will incorporate decentralization and token-based economies.</li>
                </ul>
            </div>
            
            <div id="about">
                <h1 id="header2">Web2 vs Web3</h1>
                <iframe src="https://www.youtube.com/embed/nHhAEkG1y2U" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
            </div>

            <div id="links">
                <h1>Relevant Links</h1>
                <button onClick="window.location.href = 'https://web3.foundation/'">Web3 Foundation</button>
                <button onClick="window.location.href = 'https://about.facebook.com/meta/'">Facebook Metaverse</button>
                <button onClick="window.location.href = 'https://www.sandbox.game/en//'">Sandbox Metaverse</button>
                <button onClick="window.location.href = 'https://coinmarketcap.com/'">Crypto Exchange</button>
            </div>
        </div>
        <footer>
            <div id="footinfo">
                <a href="contact.php">Contact Us</a>
                <a href="about.html">About Us</a>
                <a href="nextPage.html">Privacy Policy</a>
                <a href="nextPage.html">Terms of Use</a>
                <p>Copyright &copy; 2022 Deep Dive: Web3 & Metaverse</p>
                <img id="botlogo" src="./logo.png" alt="coin" onClick="redirect()">
            </div>
        </footer>
    </body>
</html>
