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
    <div class="tableau"></div>
     <div class="blue">
        <div class="espace_logo">
            <div class="logog">Logo</div>  
        </div>

        <hr>

            <div class="element">
                <div class="premierlettre">T</div>
                <div class="element_tableau_bord"><a href="" class="url_element_tableau_bord">Tableau de bord</a></div>
            </div>
            <div class="ligne_separaion"></div>

            <div class="element">
                <div class="premierlettre">G</div>
                <div class="element_tableau_bord"><a href="gestion_produit.php" class="url_element_tableau_bord">Gestion des produits</a></div>
            </div>
            <div class="ligne_separaion"></div>

            <div class="element">
                <div class="premierlettre">G</div>
                <div class="element_tableau_bord"><a href="" class="url_element_tableau_bord">Gestion des comandes</a></div>
            </div>
            <div class="ligne_separaion"></div>

            <div class="element">
                <div class="premierlettre">P</div>
                <div class="element_tableau_bord"><a href="" class="url_element_tableau_bord">Paramètre</a></div>
            </div>
            <div class="ligne_separaion"></div>

            <div class="element">
                <div class="premierlettre">D</div>
                <div class="element_tableau_bord"><a href="deconnexion.php" class="url_element_tableau_bord">Déconnexion</a></div>
            </div>
            <div class="ligne_separaion"></div>      
    </div>
     <div class="blanc">
        <div class="compteur">
            <div class="partie_chiffre">
            <?php
           foreach(NombreProduits() as $NP){
            echo $NP['nbr'];
           }
            ?>
            </div>
            <div class="trait"></div>
            <div class="partie_lettre"><a href="gestion_produit.php" style="color: aliceblue;
            text-decoration: none; font-size: 20px;
            font-family: 'Times New Roman', Times, serif;">Produits</a></div>
        </div>

        <div class="compteur">
            <div class="partie_chiffre">
            <?php
           foreach(NombreCommande() as $NC){
            echo $NP['Ncom'];
           }
            ?>
            </div>
            <div class="trait"></div>
            <div class="partie_lettre"><a href="" style="color: aliceblue;
            text-decoration: none; font-size: 20px;
            font-family: 'Times New Roman', Times, svelles Commaerif;">Nouvelles Commandes</a></div>
        </div>

        <div class="compteur">
            <div class="partie_chiffre">0</div>
            <div class="trait"></div>
            <div class="partie_lettre"><a href="" style="color: aliceblue;
            text-decoration: none; font-size: 20px;
            font-family: 'Times New Roman', Times, svelles Commaerif;">Commandes Confirmées</a></div>
        </div>

        <div class="compteur">
            <div class="partie_chiffre">0</div>
            <div class="trait"></div>
            <div class="partie_lettre"><a href="" style="color: aliceblue;
            text-decoration: none; font-size: 20px;
            font-family: 'Times New Roman', Times, svelles Commaerif;">Commandes Annulées</a></div>
        </div>

        <div class="compteur">
            <div class="partie_chiffre">0</div>
            <div class="trait"></div>
            <div class="partie_lettre"><a href="" style="color: aliceblue;
            text-decoration: none; font-size: 20px;
            font-family: 'Times New Roman', Times, svelles Commaerif;">Commandes Livrées</a></div>
        </div>


     </div>
          
</body>
</html>