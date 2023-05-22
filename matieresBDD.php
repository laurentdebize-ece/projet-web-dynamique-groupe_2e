<?php
session_start();

include("connexionBDD.php");
$utilisateur=$_SESSION['utilisateurs'];


// Récupérer toutes les matières associées à l'id dans la base de données
$sql = $bdd->prepare("SELECT matieres.nom FROM matieres JOIN enseignement ON enseignement.idMatiere=matieres.idMatiere JOIN etudiants ON enseignement.idClasse = etudiants.idClasse;"); 
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);



echo "<ul>";

foreach ($result as $row) {
    $matiere_id = $row['idMatiere'];
    $matiere_nom = $row['nom'];

    echo "<li>$matiere_nom ";

    
}


echo "</ul>";


?>