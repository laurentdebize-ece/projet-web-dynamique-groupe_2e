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
$nomCompetence = isset($_POST["nom"]) ? $_POST["nom"] : "";
$idUtilisateur = isset($_SESSION['utilisateurs']['idUtilisateur']) ? $_SESSION['utilisateurs']['idUtilisateur'] : null;

// Récupération de l'id de la matière en fonction de l'id de l'utilisateur
$sqlMatiere = "SELECT enseignement.idMatiere
               FROM enseignement
               WHERE enseignement.idProf = :idUtilisateur";
$stmtMatiere = $bdd->prepare($sqlMatiere);
$stmtMatiere->bindParam(':idUtilisateur', $idUtilisateur);
$stmtMatiere->execute();
$idMatiere = $stmtMatiere->fetchColumn();




$sql = "SELECT utilisateurs.nom, utilisateurs.prenom, competences.idEval, competences.statutProfs, utilisateurs.idUtilisateur, competences.idCompetence
FROM utilisateurs
JOIN etudiants ON etudiants.idUtilisateur = utilisateurs.idUtilisateur
JOIN competences ON competences.idUtilisateur = utilisateurs.idUtilisateur
JOIN matieres ON matieres.idMatiere = competences.idMatiere
WHERE matieres.nom = :nomCompetence
  AND etudiants.idClasse = :idClasse";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':idClasse', $idClasse);
    $stmt->bindParam(':nomCompetence', $nomCompetence);

    if ($stmt->execute()) {
        echo "<ul>";
        echo "";
        echo "<li>$nomCompetence ";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<li>";
            echo "<form action='validerCompetencesProfs.php' method='POST'>";
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $id = $row['idEval'];
            $statut = $row['statutProfs'];
            $competence = $row['idCompetence'];
        echo "<input type='hidden' name='competence' value='$competence'>";
        echo "<input type='hidden' name='classe' value='$idClasse'>";
        echo "<input type='hidden' name='nom' value='$nomCompetence'>";
        echo "<input type='hidden' name='id' value='$idUtilisateur'>";

           
            if ($id == 0) {
                echo $prenom . ' ' . $nom . ' ' . 'Pas encore évalué' .'<br>';

            }
            if ($id == 1) {
                echo $prenom . ' ' . $nom . ' ' . 'Acquis' .'<br>';

            }
            if ($id == 2) {
                echo $prenom . ' ' . $nom . ' ' . 'En cours' .'<br>';

            }
            if ($id == 3) {
                echo $prenom . ' ' . $nom . ' ' . 'Non acquis' .'<br>';
            }
            if ($statut == 1) {
                echo "<input type='radio' name='statut' value='1' checked> d'accord ";
            } else {
                echo "<input type='radio' name='statut' value='1'> d'accord ";
            }
    
            if ($statut == 2) {
                echo "<input type='radio' name='statut' value='2' checked> pas d'accord ";
            } else {
                echo "<input type='radio' name='statut' value='2'> pas d'accord ";
            }
            echo "<input type='submit' value='Enregistrer'>";
        echo "</form></li>";
    
        }
        echo "</ul>";

    }
?>




</body>
</html>