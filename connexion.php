<?php include'config.php' ?>

<?php 
			if(isset($_POST['inscription'])){
				AjouterClient(
					$_POST['nom'],
					$_POST['prenom'],
					$_POST['adresse'],
					$_POST['num_tel'],
					$_POST['email'],
					$_POST['mdp']
				);
			}
			
		?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="connexionbackround">
    <section class="section">
        <h1>Connexion</h1>
        <form action="login.php" method="POST">
            <label>Adresse mail</label>
            <input type="email" name="email">
            <label >Mot de passe</label>
            <input type="password" name="mdp">
            <input type="submit" value="Connexion" name="connexion">
            <br>
            <center><a href="inscription.php" name="inscription" style="text-decoration: none; color:aliceblue;">Inscriez-vous</a></center>
            
        </form>
    </section>
  
</body>
</html>