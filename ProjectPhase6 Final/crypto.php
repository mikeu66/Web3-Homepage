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
            <b id="heading" >Cryptocurrency</b>
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
        <div class = "maincrypto">
            <h2>What is Cryptocurrency?</h2>
            <p class = "indent" style = "font-size:16pt;">
                Cryptocurrency is an encrypted data string that represents a unit of currency. 
		It is organized and monitored by a blockchain, which is a distributed database shared among computer 
		network nodes. It stores information electronically, and for cryptocurrency, it stores a secure and 
		decentralized record of transactions. Decentralization refers to the absence of a government or 
		financial institution that would normally issue the currency. 
            </p>
            <p class = "indent" style = "font-size:16pt;">
                The first cryptocurrency, Bitcoin, was invented by an anonymous person called Satoshi Nakamoto in 2008. 
		Since then, there are now thousands of different cryptocurrencies in the market. As of November 2021, 
		there were over 18.8 million bitcoins with a hard cap of 21 million in total supply. Currently,
		bitcoins are valued at around $40,000 USD each.
            </p>
	    <img style = "width: 800px; height: 400px; display:block; margin-left:auto; margin-right:auto;" src = "https://images.ctfassets.net/q5ulk4bp65r7/0FbNtfSpCRcAbMcEgrzNg/c80025da573dc11dc083aaad519c8356/1a_bitcoin-stats.gif?w=1180" loading = "lazy" />
	    <p class = "indent" style = "font-size:16pt;">
		Cryptocurrencies are the first alternative form of "cash", in that by having all assets native to the
		internet, they have the potential to be the fastest, safest, and most universal method of exchanging
		currencies around the world. Because they are detached from any central authority, the currency is
		secure regardless of governmental actions. Additionally, anyone can enter the crypto market, so long
		as they have access to the internet, giving equal opportunities for anyone to take advantage of this
		borderless asset. You don't even need to own a whole bitcoin - the benefit of having these internet
		currencies are that they can be divided down to tiny fractions, expanding economic freedom for more 
		people around the world.
	    </p>
	    <p class = "indent" style = "font-size:16pt;">
		Want more information about how cryptocurrencies work? Check out this video with a real life analogy:
	    </p>
	    <iframe style = "display:block; margin-left:auto; margin-right:auto" width="1250" height="703" src="https://www.youtube.com/embed/A-L2M0l5dEY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </div>
    </body>
</html>

