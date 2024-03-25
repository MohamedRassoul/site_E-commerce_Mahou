
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
                <div class="premierlettre">Aj</div>
                <div class="element_tableau_bord"><a href="ajout_produits.php" class="url_element_tableau_bord">Ajouter Produits</a></div>
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
     <div class="titreproduits"> <center><p>Liste des produits</p></center></div>
        
        <div class="contener">
        <?php 
                if(isset($_POST['modifier'])){
                    ModifierProduit(
                        $_POST['description'],
                        $_POST['prix']
                    );
                }
                
            ?>
        <?php 
            if(isset($_POST['ajouter'])){
				Ajouterproduits(
					$description=$_POST['description'],
					$prix=$_POST['prix']
				);
			}
			
		?>

        <?php 
            if(isset($_GET['idSupp'])){
                SupprimerProduit();
            }
        ?>

          <?php foreach(AfficherProduits() as $AP){?>
            
        <div class="bloc">
                <div class="photo">
                    <img src="photo/<?php echo $AP['photo']; ?>" width="100%" alt="">
                </div>
                <div class="descriptionlunette">
                    <p class="descrirelunette"> <?php echo $AP['description']; ?></p>
                </div>
                <div class="prixlunette"><?php echo $AP['prix']; ?> DH</div>

                <div class="modifier_dans_boutique"> <a href="supprimer_produit.php?idSupp=<?php echo $AP['id']?>" class="modifSupp">Suppr</a> </div>

                <div class="supprimer_dans_boutique"> <a href="modifier_produit.php?id=<?php echo $AP['id']?>" class="modifSupp">Modif</a> </div>

        </div>
            <?php } ?>
       

     </div>
          
</body>
</html>