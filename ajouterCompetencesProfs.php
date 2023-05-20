<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_menu.css">
    <link rel="stylesheet" type="text/css" href="style_footer.css">
    <title>Document</title>
</head>
<body>
    <?php
    include "menu.php";
    ?>
    <?php
session_start();
include("connexionBDD.php");

$nomCompetence = isset($_POST["nomCompetence"]) ? $_POST["nomCompetence"] : "";
$idClasse = isset($_POST["classe"]) ? $_POST["classe"] : "";
$idUtilisateur = isset($_SESSION['utilisateurs']['idUtilisateur']) ? $_SESSION['utilisateurs']['idUtilisateur'] : null;
$idMatiere = isset($_POST["matiere"]) ? $_POST["matiere"] : "";

$sql = "INSERT INTO competences (idCompetence, nomCompetence, idMatiere,idEval , idUtilisateur) VALUES (NULL, :nomCompetence, :idMatiere, 0, :idUtilisateur)";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':idMatiere', $idMatiere);
$stmt->bindParam(':nomCompetence', $nomCompetence);
$stmt->bindParam(':idUtilisateur', $idUtilisateur);

if ($stmt->execute()) {
    // Récupération de l'ID de la compétence nouvellement insérée
    $idCompetence = $bdd->lastInsertId();

    // Récupération des étudiants de la classe sélectionnée
    $sqlEtudiants = "SELECT idUtilisateur FROM etudiants WHERE idClasse = :idClasse";
    $stmtEtudiants = $bdd->prepare($sqlEtudiants);
    $stmtEtudiants->bindParam(':idClasse', $idClasse);
    $stmtEtudiants->execute();

    // Insertion de l'ID de la compétence et de l'ID de chaque étudiant dans la table des compétences des étudiants
    while ($row = $stmtEtudiants->fetch(PDO::FETCH_ASSOC)) {
        $idEtudiant = $row['idUtilisateur'];

        $sqlInsertEtudiants = "INSERT INTO competences (idCompetence, nomCompetence, idMatiere,idEval , idUtilisateur) VALUES (NULL, :nomCompetence, :idMatiere, 0, :idEtudiant)";
        $stmtInsertEtudiants = $bdd->prepare($sqlInsertEtudiants);
        $stmtInsertEtudiants->bindParam(':nomCompetence', $nomCompetence);
        $stmtInsertEtudiants->bindParam(':idMatiere', $idMatiere);
        $stmtInsertEtudiants->bindParam(':idEtudiant', $idEtudiant);

        $stmtInsertEtudiants->execute();
    }

    if ($stmtInsertEtudiants->execute()) {
        echo "<form action='competencesProfs.php' method='post'>";
        echo "La compétence a été ajoutée avec succès et associée à tous les étudiants de la classe.";
        echo "<input type='submit' value='Revenir à la page des compétences'>";

        echo "</form>";
    }
} else {
    echo "Erreur lors de l'ajout de la compétence.";
}
?>

</body>
</html>

