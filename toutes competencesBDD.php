<?php
session_start();

include("connexionBDD.php");

$idUtilisateur = isset($_SESSION['utilisateurs']['idUtilisateur']) ? $_SESSION['utilisateurs']['idUtilisateur'] : null;

$sql = $bdd->prepare("SELECT DISTINCT c.nomCompetence, m.idMatiere FROM Competences c JOIN Matieres m ON c.idMatiere = m.idMatiere"); 
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);


echo "<ul>";

foreach ($result as $row) {
    $competence_nom = $row['nomCompetence'];
    $matiere_id = $row['idMatiere'];
    echo "<li>$competence_nom ";

    echo "<form action='toutes_competencesBDD.php' method='POST'>";
    echo "<input type='hidden' name='competence' value='$competence_nom'>";
    echo "<input type='hidden' name='idMatiere' value='$matiere_id'>"; 
    echo "<input type='hidden' name='idUtilisateur' value='$idUtilisateur'>";

    echo "<input type='submit' value='Enregistrer'>";
    echo "</form></li>";
}

echo "</ul>";
?>