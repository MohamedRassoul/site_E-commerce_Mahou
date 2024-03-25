<?php
function Connexion(){
	try {
	$cnx = new PDO('mysql:host=localhost;dbname=site_ecommerce', "root", "");
	} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
	}
		return $cnx;
}

function AfficherProduits() {
	$cnx = Connexion();
	$req = $cnx->prepare("SELECT * FROM produits");
	$req->execute();
	return $req->fetchAll();
}

function NombreProduits() {
	$cnx = Connexion();
	$req = $cnx->prepare("SELECT count(*) as nbr FROM produits");
	$req->execute();
	return $req->fetchAll();
}

function Ajouterproduits($description, $prix){
	try {
		$photo="";
		if($_FILES['photo']['error']==UPLOAD_ERR_OK){
			if($_FILES['photo']['type']!="image/png" && $_FILES['photo']['type']!="image/jpg" && $_FILES['photo']['type']!="image/jpeg"){
				echo"Le format de votre fichier n'est pas valide! Veuillez utilisez les fichier: .jpg, .jpeg ou .png";
				die();
			}else{
				$photo=time().$_FILES['photo']['name'];
				move_uploaded_file($_FILES['photo']['tmp_name'] , "photo/".$photo);
			}
		}else if($_FILES['photo']['error']==UPLOAD_ERR_INI_SIZE){
			echo 'La taille maximale autorisé de votre fichier ne doit pas dépasser 2Mo!';
			die();
		}
	$cnx = Connexion();
	$req = $cnx->prepare("INSERT INTO `produits` (`description`, `prix`, `photo`) VALUES(?,?,'$photo')");
	$req->execute(array($description, $prix));
	return true;
	die();
	}catch (PDOException $e){
		echo "Impossible d'ajouter la fichier pour le moment, revenez plus tard !";
		die();
	}
}

function ModifierProduit($description, $prix){
	try {
		$photo="";
		if($_FILES['photo']['error']==UPLOAD_ERR_OK){
			if($_FILES['photo']['type']!="image/png" && $_FILES['photo']['type']!="image/jpg" && $_FILES['photo']['type']!="image/jpeg"){
				echo"Le format de votre fichier n'est pas valide! Veuillez utilisez les fichier: .jpg, .jpeg ou .png";
				die();
			}else{
				$photo=time().$_FILES['photo']['name'];
				move_uploaded_file($_FILES['photo']['tmp_name'] , "photo/".$photo);
			}
		}else if($_FILES['photo']['error']==UPLOAD_ERR_INI_SIZE){
			echo 'La taille maximale autorisé de votre fichier ne doit pas dépasser 2Mo!';
			die();
		} else {
			$photo=$_SESSION['photo'];
		}
	$cnx = Connexion();
	$id=$_GET['id'];
	$req=$cnx->prepare ("UPDATE produits SET `description`=?, `prix`=?, `photo`='$photo' WHERE id='$id'");
    $req->execute(array($description, $prix));
	return true;
	die();
	}catch (PDOException $e){
		echo "Impossible d'ajouter la fichier pour le moment, revenez plus tard !";
		die();
	}
}

function AfficherProduitModif() {
	$cnx = Connexion();
	$id=$_GET['id'];
	$req = $cnx->prepare("SELECT * FROM produits WHERE id='$id'");
	$req->execute();
	return $req->fetchAll();
}

function SupprimerProduit(){
	$cnx = Connexion();
	$id=$_GET['idSupp'];
	$req=$cnx->prepare ("DELETE FROM produits WHERE id='$id'");
    $req->execute();
}

function Users() {
	$cnx = Connexion();
	$req = $cnx->prepare("SELECT * FROM users_clients");
	$req->execute();
	return $req->fetchAll();
}

function NombreCommande() {
	$cnx = Connexion();
	$req = $cnx->prepare("SELECT count(*) as Ncom FROM commandes");
	$req->execute();
	return $req->fetchAll();
}

function AjouterCommandes($id_produit) {
	$cnx = Connexion();
	$req = $cnx->prepare("INSERT INTO `commandes` (`id_produit`, `statut`, `datetime`) VALUES(?, 'nouveau',now())");
	$req->execute(array($id_produit));
}

function AjouterClient($nom, $prenom, $adresse, $num_tel, $email, $mdp) {
	$cnx = Connexion();
	$req = $cnx->prepare("INSERT INTO `users_clients` (`nom`, `prenom`, `adresse`, `num_tel`, `email`, `mdp`, `role`) VALUES(?,?,?,?,?,?, 'client')");
	$req->execute(array($nom, $prenom, $adresse, $num_tel, $email, $mdp));
}

?>