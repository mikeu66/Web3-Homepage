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
            <b id="heading" >NFTs</b>
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
        <div class = "mainNFT">
        <h2>What are NFTs?</h2>
        <p class="indent">
            NFT stands for Non-fungible Token, and most of them are part of the Ethereum (a type of crypto currency) blockchain.
            It can be used to refer to anything digital, including music and art, or even material things such as real estate. Most of the current buzz surrounding this technology 
            however is around using it to sell digital art. 
        </p>
        <h2>Why are NFTs significant?</h2>
        <p class="indent">
            Non-fungible means that unlike cryptocurrencies like Bitcoin where you can trade one for another, NFTs are unique and cannot be replaced.
            The tokenizing of real-world and digital assets through NFTs makes buying, selling or trading them more efficient, while simultaneously reducing the probability of fraud. 
            This is because each token would have a digital passport of sorts, which would list information such as its owner, creator, any contracts associated with it etc. 
            This enables things like smart contracts, which can be used to program royalties and such. This in turn allows artists to automatically revieve a percentage of a sale pertaining to their work directly in their wallets. 
        </p>
	<iframe style = "display:block; margin-left:auto; margin-right:auto" "width="914" height="514" src="https://www.youtube.com/embed/NNQLJcJEzv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    </body>
</html>
