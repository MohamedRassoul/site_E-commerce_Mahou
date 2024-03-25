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
                <div class="premierlettre">Aj</div>
                <div class="element_tableau_bord"><a href="ajouter_produit.php" class="url_element_tableau_bord">Ajouter Produits</a></div>
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
     <section class="section3">
            <form action="gestion_produit.php?id=<?php echo $_GET['id'];?>" method="POST" enctype="multipart/form-data">
                <?php 
                    foreach(AfficherProduitModif() as $AP){
                        $_SESSION['photo']=$AP['photo'];
                ?>
                            <h1>Modifier les produits</h1>
                            <label>Le nom de la photo</label>
                                <input type="text" name="description" placeholder="desciption du produit" value="<?php echo $AP['description']; ?>" required>
                                <label >Le prix</label>
                                <input type="number" name="prix" placeholder="le prix du produit en CFA" value="<?php echo $AP['prix']; ?>" required>
                                <label>La photo</label>
                                <input type="file" name="photo">
                                <input type="submit" value="Modifier un produit" name="modifier">
                    </section>            
            <?php } ?>
            </form>
        </div> 
</body>
</html>