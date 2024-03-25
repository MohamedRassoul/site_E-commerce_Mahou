<?php
    session_start();
   include'config.php';
    foreach( Users() as $U){
        if($_POST['email']==$U['email'] && $_POST['mdp']==$U['mdp']){
            $_SESSION['nom']=$U['nom'];
            $_SESSION['id']=$U['id'];
            $_SESSION['role']=$U['role'];
            header('location: gestion_site.php');
            break;
        }else{
            header('location: connexion.php');
        }
    }


?>
