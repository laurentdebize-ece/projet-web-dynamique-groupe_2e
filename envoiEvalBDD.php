<?php
 session_start();

 include("connexionBDD.php");
 $eval = $_POST["eval"];

 $requete = $bdd->prepare("SELECT * from competences where idCompetence = :idCompetence")
 if ($eval == 1) {

 }

?>
