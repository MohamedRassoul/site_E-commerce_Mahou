<?php include'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
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

            <div class="gmenu"> <a href="">À propos</a>  |  <a href="">Contact</a></div>

            <div class="cercle">
                <div id="lunette"><img src="images/eyeglasses.png" alt="" id="verre"> <center id="read"> Je vois!</center></div>
            </div>
        </div>
    </div>
    </header>
    <main>
        <div class="main">
            <div class="slides"> 
                <div id="imageslides">
                <div id="amazingslider-1" style="display:block;position:relative;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="images/1710868415images.jpg" alt="1710868415images" /></li>
            <li><img src="images/1711032355courbe commerce electronique.png" alt="1711032355courbe commerce electronique" /></li>
            <li><img src="images/1711037267ecommerce.jpg" alt="1711037267ecommerce" /></li>
            <li><img src="images/photo.jpg" alt="photo" /></li>
            <li><img src="images/photo.png" alt="photo" /></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            <li><img src="images/1710868415images-tn.jpg" /></li>
            <li><img src="images/1711032355courbe commerce electronique-tn.png" /></li>
            <li><img src="images/1711037267ecommerce-tn.jpg" /></li>
            <li><img src="images/photo-tn.jpg" /></li>
            <li><img src="images/photo-tn.png" /></li>
        </ul>
    </div>
                </div> 
            </div>
            <div class="lignentete">
                <div id="tittretxt"><center id="question">Qui sommes vous ?</center></div>
            </div>
            <div class="texte">
                <p id="texte">Bienvenue chez "Je vois" ! Nous sommes votre destination incontournable pour trouver des lunette et lentilles de qualité, adaptées à votre style et à vos besoins. Notre équipe dévouée est là pour vous offre une expérience personnalisée et vous aider à retrouverv une vision claire et confiante.</p>
            </div>
            <div class="lignentete2">
                <div id="tittretxt2"><center id="question">Nos produits </center></div>
            </div>

            <div class="lesimages">
                <div id="image1">
                    <div id="img1"></div>
                    <div id="tit1"></div>
                </div>
                <div id="image2">
                    <div id="img1"></div>
                    <div id="tit1"></div>
                </div>
                <div id="image3">
                    <div id="img1"></div>
                    <div id="tit1"></div>
                </div>
            </div>
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