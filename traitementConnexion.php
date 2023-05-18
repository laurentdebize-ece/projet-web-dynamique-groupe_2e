<?php
session_start();
include("connexionBDD.php");
$email=isset($_POST["email"])? $_POST["email"] : "";
$mdp=isset($_POST["mdp"])? $_POST["mdp"] : "";
$_SESSION["email"] = $email;
# On vérifie qu'il n'y a pas d'erreur et que tous les champs sont remplis
$erreur="";
if($email ==""){
    $erreur= "Veuillez renseigner votre mail de lié au groupe Omnes.<br>";
}
if($erreur== ""){
}
else{
    echo "Une erreur est servenue:".$erreur;
}
#On se connecte à la base de donné et on effectue nos requetes afin de vérifier
#que les identifiants correspondent à ceux de notre base de donne
$req= $bdd->prepare("SELECT * FROM utilisateurs WHERE mail= :email");
$params = array( 'email'=> $email);
$req->execute($params);
$utilisateur=$req->fetch(PDO::FETCH_ASSOC);
$_SESSION['utilisateurs'] = $utilisateur;
if($utilisateur['mdp']==""){
    header("Location:nouveauCompte.php");
}else{ 
    $_SESSION["mdp"] = $mdp;
    header("Location:compteExistant.php");

}


/*
$reqNom= $bdd->prepare("SELECT prenom FROM utilisateurs WHERE mail= :email ");
$reqNom->execute(array('email'=> $email));
$nomUser = $reqNom->fetch();
$_SESSION['nom'] = $nomUser['nom'];
*/


?>