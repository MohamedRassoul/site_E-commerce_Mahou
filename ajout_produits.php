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
                <div class="element_tableau_bord"><a href="gestion_site.php" class="url_element_tableau_bord">Tableau de bord</a></div>
            </div>
            <div class="ligne_separaion"></div>

            <div class="element">
                <div class="premierlettre">G</div>
                <div class="element_tableau_bord"><a href="gestion_produit.php" class="url_element_tableau_bord">Gestion Produits</a></div>
            </div>
            <div class="ligne_separaion"></div>

            <div class="element">
                <div class="premierlettre">Af</div>
                <div class="element_tableau_bord"><a href="afficher_produits.php" class="url_element_tableau_bord">Afficher Produits</a></div>
            </div>
            <div class="ligne_separaion"></div>

            <div class="element">
                <div class="premierlettre">M</div>
                <div class="element_tableau_bord"><a href="modifier_produit.php" class="url_element_tableau_bord">Modifier Produits</a></div>
            </div>
            <div class="ligne_separaion"></div>

            <div class="element">
                <div class="premierlettre">S</div>
                <div class="element_tableau_bord"><a href="supprimer_produit.php" class="url_element_tableau_bord">Supprimer Produits</a></div>
            </div>
            <div class="ligne_separaion"></div>

            <div class="element">
                <div class="premierlettre">D</div>
                <div class="element_tableau_bord"><a href="deconnexion.php" class="url_element_tableau_bord">Déconnexion</a></div>
            </div>
            <div class="ligne_separaion"></div>      
    </div>

    <div class="blanc">
                    <section>
                        <h1>Connexion</h1>
                            <form action="gestion_produit.php" method="POST" enctype="multipart/form-data">
                                <label>Le nom de la photo</label>
                                <input type="text" name="description" placeholder="desciption du produit">
                                <label >Le prix</label>
                                <input type="number" name="prix" placeholder="le prix du produit en CFA">
                                <label>La photo</label>
                                <input type="file" name="photo" placeholder="photo.jpg">
                                <input type="submit" value="Ajouter un produit" name="ajouter">
                            </form>
                    </section>
                </div>
            </div>
    </div> 
</body>
</html>