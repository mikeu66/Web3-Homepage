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
                    <td id = "create"><a href="./create.php">Create Account</a></td>
                    <td><?php echo "<a href='./profile.php'>$username</a>"; ?></td>
                </table>
            </div>
        </div>
        <div class="main">
            <div class="top">
                <a id="navleft" href="<?php if ($active == true) { echo "./crypto.php ";} else {echo $whereTo;} ?>">CRYPTOCURRENCY</a>
                <a id="navmiddle" href="<?php if ($active == true) { echo "./meta.php ";} else {echo $whereTo;} ?>">METAVERSE</a>
                <a id="navright" href="<?php if ($active == true) { echo "./nft.php ";} else {echo $whereTo;} ?>">NFTs</a>
            </div>
            <h3>What is Web3?</h3>
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
            <h2 id = "trackerHeader" >Crypto Tracker<h2>
            <div id = "tracker">
            <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; 
            border: 1px solid #56667F; border-radius: 4px; text-align: center; line-height:14px; font-size: 12px; 
            font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin-bottom: 0px; width: 100%;">

<div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
<div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
    <a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
</div>
        </div>
</div>
        <footer>
            <div id="footinfo">
                <a href="contact.php">Contact Us</a>
                <a href="about.html">About Us</a>
                <p>Copyright &copy; 2022 Deep Dive: Web3 & Metaverse</p>
                <img id="botlogo" src="./logo.png" alt="coin" onClick="redirect()">
            </div>
        </footer>
    </body>
</html>
