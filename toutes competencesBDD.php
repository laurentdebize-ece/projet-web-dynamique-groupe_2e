<?php
session_start();

include("connexionBDD.php");


// Récupérer toutes les matières 
$sql = $bdd->prepare("SELECT nomCompetence FROM Competences"); 
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);



echo "<ul>";

foreach ($result as $row) {
    $competence_nom = $row['nomCompetence'];

    echo "<li>$competence_nom ";
    //echo "<form action='envoiEvalBDD.php' method='POST'>";
    // changer la ligne précedent pour pouvoir selectionner la matière à ajouter 

    

    echo "<input type='submit' value='Enregistrer'>";
    echo "</form></li>";
}


echo "</ul>";


?>