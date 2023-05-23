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



if($utilisateur['mdp']==$mdpExistant){
    if($utilisateur["rang"]==1){
        header("Location:accueilAdmin.php");
        exit();
    }
    else if($utilisateur["rang"]==2){
        header("Location:accueilProfs.php");
        exit();
    }
    else if($utilisateur["rang"]==3){
        header("Location:accueil.php");
        exit();
    }else{
        echo "Le mot de passe est incorrect";
    }
}
else{
    echo "mot de passe incorect";
}


?>