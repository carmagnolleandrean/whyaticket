<?php
require_once('co_bdd.php');
session_start(); 

if(isset($_POST['boutton-valider'])){ 
    if(isset($_POST['titre']) && isset($_POST['desc']) && isset($_POST['categorie'])) { 
        // Vérifie que l'utilisateur a bien rempli les champs nécessaires
        $titre = htmlspecialchars($_POST['titre']);
        $desc = htmlspecialchars($_POST['desc']);
        $cate = $_POST['categorie'];
        $idUtilisateur = $_SESSION['id'];  // Récupère l'ID de l'utilisateur depuis la session
        
        // Requête d'insertion des données dans la table ticket
        $creerTicket = $lien->prepare('INSERT INTO ticket (idCat, titre, description, dateCreation, idUtilisateur) VALUES (?, ?, ?, NOW(), ?)');
        $creerTicket->execute(array($cate, $titre, $desc, $idUtilisateur));

        // Redirection après la création du ticket
        header('Location: https://whyaticket.alwaysdata.net/#/about');
    }
}
?>
