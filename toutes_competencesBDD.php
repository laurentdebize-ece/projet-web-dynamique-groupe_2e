<?php
session_start();

include("connexionBDD.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $competence = $_POST['competence'];
    $idMatiere = $_POST['idMatiere'];
    $idUtilisateur = $_POST['idUtilisateur'];

    // Récupérer l'idCompetence le plus grand + 1
    $sql = $bdd->prepare("SELECT MAX(idCompetence) AS maxId FROM Competences");
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    $maxId = $result['maxId'];
    $idCompetence = $maxId + 1;

    // Insérer les valeurs dans la base de données
    $sql = $bdd->prepare("INSERT INTO Competences (idCompetence, idMatiere, idEval, idUtilisateur, nomCompetence) VALUES (:idCompetence, :idMatiere, 0, :idUtilisateur, :competence)");
    $sql->bindParam(':idCompetence', $idCompetence);
    $sql->bindParam(':idMatiere', $idMatiere);
    $sql->bindParam(':idUtilisateur', $idUtilisateur);
    $sql->bindParam(':competence', $competence);
    $sql->execute();

    // Rediriger vers la page des compétences
    header("Location: toutes competencesBDD.php");
    exit();
}
?>