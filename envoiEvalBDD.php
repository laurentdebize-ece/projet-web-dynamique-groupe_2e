<?php
 session_start();

 try
 {
 $bdd = new PDO('mysql:host=localhost;dbname=bdece;
 charset=utf8', 'root', '',
 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch (Exception $e)
 {
 die('Erreur : ' . $e->getMessage());
 }
 
 $eval = isset($_POST["eval"]) ? $_POST["eval"] : "";
 $matiere = isset($_POST["matiere"]) ? $_POST["matiere"] : "";
 $competence = isset($_POST["competence_id"]) ? $_POST["competence_id"] : "";

$erreur = "";
if ($eval == "") {
    $erreur .= "L'évaluation n'a pas pu être sélectionnée";
}

if ($erreur == "") {
    echo "";
} else {
    echo "Erreur: <br>" . $erreur;
}


$sql = "UPDATE competences SET idEval = :nouvelleValeur WHERE idMatiere = :idMatiere AND idCompetence = :idCompetence";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':nouvelleValeur', $eval);
    $stmt->bindParam(':idMatiere', $matiere);
    $stmt->bindParam(':idCompetence', $competence);
 

?>
