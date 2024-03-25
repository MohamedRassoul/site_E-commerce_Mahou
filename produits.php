<?php
session_start();
include'config.php';
if(!isset($_SESSION['id'])){
    header('location: connexion.php' );
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="tableau-bord">
            <div class="entexte1">
                <div id="icon"> <img src="images/phone.png" alt="" id="icon"> </div>
                <div id="num"> +221 77 790 14 60 </div>
            </div>
            <div class="entexte2"> 
                <div id="entext2"> <a href="">Espace Clients</a>  | <a href="">Tickets</a> </div>
            </div>
    </div>
    <header>
        <div class="header">
            <div class="panier">
            <div id="espacepanier">
                <div id="paniermarche"> <img src="images/chariot.png" alt="" id="paniermarche"></div>
                <div id="prix"> 0.00 DH</div>
            </div>
        </div>
        <div class="menu">
            <div class="dmenu"> <a href="index.php"> Accueil</a>  |  <a href="produits.php">Produits</a></div>

            <div class="gmenu"> <a href="" gmenu>À propos</a>  |  <a href="" gmenu>Contact</a></div>

            <div class="cercle">
                <div id="lunette"><img src="images/eyeglasses.png" alt="" id="verre"> <center id="read"> Je vois!</center></div>
            </div>
        </div>
    </div>
    </header>


    <main class="lesproduits">
        <div class="titreproduits"><p>Liste des produits</p></div>
        <div class="contener">
          <?php foreach(AfficherProduits() as $AP){?>
     
        <div class="bloc">
                <div class="photo">
                    <img src="photo/<?php echo $AP['photo']; ?>" width="100%" alt="">
                </div>
                <div class="descriptionlunette">
                    <p class="descrirelunette"> <?php echo $AP['description']; ?></p>
                </div>
                <div class="prixlunette"><?php echo $AP['prix']; ?> DH</div>

                <div > <input type="submit" value="Commender" class="commender" > </div>

        </div>
            <?php } ?>
            
            <div style="clear: both;"></div>    
        </div>

    </main>
    <footer>
        <div class="footer">
            <div class="piedpage">
                <div id="tex"> <center id="slogan">Je Vois : Votre clarté, notre vision</center>  </div>
                <div id="texim"></div>
                <div id="foot"> <center id="footer">Copyright @ 2023-Je Vois</center> </div>
            </div>
        </div>
    </footer>
</body>
</html>