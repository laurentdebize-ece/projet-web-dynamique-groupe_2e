<?php
session_start();
include("connexionBDD.php");
$email=isset($_POST["email"])? $_POST["email"] : "";
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
$req= $bdd->prepare("SELECT mail FROM utilisateurs WHERE mail= '$email'");
$req->execute();
$result = $req->fetch(PDO::FETCH_ASSOC);

if($result){
    header("Location:nouveauCompte.php");
}


?>
