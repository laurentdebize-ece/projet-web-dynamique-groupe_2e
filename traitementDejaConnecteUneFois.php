<?php
session_start();
$utilisateur=$_SESSION['utilisateurs'];
include("connexionBDD.php");
$email=isset($_POST["email"])? $_POST["email"] : "";
$_SESSION["email"] = $email;
$mdpExistant = isset($_POST["ACmdp"]) ? $_POST["ACmdp"] : "";


$req=$bdd->prepare("SELECT mdp FROM utilisateurs WHERE mail= :email");
$params = array('email'=> $email);
$req->execute($params);
if($mdpEntrer==$utilisateur['mdp']){
    header("Location:accueil.php");
}else{
    echo "Le mot de passe est incorrect";
}

?>