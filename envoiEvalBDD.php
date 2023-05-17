<?php
 session_start();

 include("connexionBDD.php");

 $eval = isset($_POST["eval"]) ? $_POST["eval"] : "";
 $matiere = isset($_POST["matiere"]) ? $_POST["matiere"] : "";

$erreur = "";
if ($eval == "") {
    $erreur .= "L'évaluation n'a pas pu être sélectionnée";
}

if ($erreur == "") {
    echo "";
} else {
    echo "Erreur: <br>" . $erreur;
}


 $requete = $bdd->prepare("SELECT * from competences where idCompetence = :idCompetence")
 if ($eval == 1) {

 }

?>
