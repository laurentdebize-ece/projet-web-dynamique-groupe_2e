<?php
session_start();

include("connexionBDD.php");
$utilisateur=$_SESSION['utilisateurs'];

$ancienMdp = isset($_POST["ancienMdp"]) ? $_POST["ancienMdp"] : "";
$mdp1 = isset($_POST["Modif1"]) ? $_POST["Modif1"] : "";
$mdp2 = isset($_POST["Modif2"]) ? $_POST["Modif2"] : "";
$email = $_SESSION["email"];

# On vérifie qu'il n'y a pas d'erreur et que tous les champs sont remplis
$erreur = "";

if ($mdp1 == "") {
    $erreur .= " Mot de passe non renseigné.<br>";
}
if ($mdp2 == "") {
    $erreur .= " Mot de passe non renseigné.<br>";
}
if ($erreur == "") {
    if ($utilisateur["mdp"] == $ancienMdp) {
        echo "beug";
        if ($mdp1==$mdp2){
            $req = $bdd->prepare("UPDATE utilisateurs SET mdp = :mdp WHERE mail = :email");
            $params = array('mdp'=> $mdp2, 'email'=> $utilisateur["mail"]);
            $req->execute($params);
            $num_rows_affected = $req->rowCount();
            if ($num_rows_affected > 0){
                header("Location:compte.php");
            } 
        } else {
            $erreur = "Erreur lors de la mise à jour du mot de passe.";
        }
    } else {
        $erreur = "Les deux mots de passe doivent être identiques.";
    }
}

if (!empty($erreur)) {
    echo "Une erreur est survenue : " . $erreur;
}

?>
