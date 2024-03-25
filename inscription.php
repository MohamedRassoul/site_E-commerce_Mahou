<?php include'config.php'; ?>

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

        <section class="section2">
            <h1>Inscription</h1>
            <form action="connexion.php" method="POST">
                <label>Nom</label>
                <input type="text" name="nom">
                <label >Prenom</label>
                <input type="text" name="prenom">
                <label>Adresse</label>
                <input type="text" name="adresse">
                <label >Téléphone</label>
                <input type="tel" name="num_tel">
                <label>Adresse mail</label>
                <input type="email" name="email">
                <label >Mot de passe</label>
                <input type="password" name="mdp">
                <input type="submit" value="Inscrire" name="inscription">
            </form>
        </section>
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