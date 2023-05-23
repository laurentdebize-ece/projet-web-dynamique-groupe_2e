<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_menu.css">

    <title>Document</title>
</head>
<body>
    <?php
    include "menuProfs.php";
    ?>
    <?php
session_start();
include("connexionBDD.php");

$idClasse = isset($_POST["classe"]) ? $_POST["classe"] : "";
$idUtilisateur = isset($_SESSION['utilisateurs']['idUtilisateur']) ? $_SESSION['utilisateurs']['idUtilisateur'] : null;

// Récupération de l'id de la matière en fonction de l'id de l'utilisateur
$sqlMatiere = "SELECT enseignement.idMatiere
               FROM enseignement
               WHERE enseignement.idProf = :idUtilisateur";
$stmtMatiere = $bdd->prepare($sqlMatiere);
$stmtMatiere->bindParam(':idUtilisateur', $idUtilisateur);
$stmtMatiere->execute();
$idMatiere = $stmtMatiere->fetchColumn();



$sql = "SELECT c.idCompetence, c.nomCompetence
FROM competences c
INNER JOIN enseignement e ON c.idMatiere = e.idMatiere
WHERE e.idClasse = :idClasse
AND c.idMatiere = :idMatiere";





// Récupération des compétences en fonction de la classe et de la matière
$sqlCompetences = "SELECT competences.idCompetence, competences.nomCompetence
                   FROM competences
                   INNER JOIN enseignement ON competences.idMatiere = etudiants.idMatiere
                   INNER JOIN etudiants ON competences_etudiants.idEtudiant = etudiants.idUtilisateur
                   WHERE etudiants.idClasse = :idClasse
                   AND competences.idMatiere = :idMatiere";
$stmtCompetences = $bdd->prepare($sqlCompetences);
$stmtCompetences->bindParam(':idClasse', $idClasse);
$stmtCompetences->bindParam(':idMatiere', $idMatiere);
$stmtCompetences->execute();
$competences = $stmtCompetences->fetchAll(PDO::FETCH_ASSOC);
?>

<label for="competence">Sélectionnez une compétence :</label>
<select name="competence" id="competence">
    <?php foreach ($competences as $competence) : ?>
        <option value="<?php echo $competence['idCompetence']; ?>"><?php echo $competence['nomCompetence']; ?></option>
    <?php endforeach; ?>
</select>

</body>
</html>