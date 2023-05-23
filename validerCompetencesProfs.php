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
    include "connexionBDD.php";


    $competence = isset($_POST["competence"]) ? $_POST["competence"] : "";
    $classe = isset($_POST["classe"]) ? $_POST["classe"] : "";
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
    $id = isset($_POST["id"]) ? $_POST["id"] : "";

    $statut = isset($_POST["statut"]) ? $_POST["statut"] : "";
    $sql = "UPDATE competences SET statutProfs = :nouvelleValeur WHERE idCompetence = :idCompetence";
    $stmt = $bdd->prepare($sql);
$stmt->bindParam(':nouvelleValeur', $statut);
$stmt->bindParam(':idCompetence', $competence);

if ($stmt->execute()) {
    echo "<form action='voirCompetencesProfs.php' method='POST'>";
    echo "<input type='hidden' name='classe' value='$classe'>";
    echo "<input type='hidden' name='nom' value='$nom'>";

    echo "L'évaluation de la competence a bien été enregistrée";
    echo "<input type='submit' value='Revenir à la page des compétences'>";
    echo "</form>";
} else {
    echo "Erreur lors de la mise à jour de la valeur d'évaluation.";
    echo "<form action='voirCompetencesProfs.php' method='POST'>";
    echo "<input type='hidden' name='classe' value='$classe'>";
    echo "<input type='hidden' name='nom' value='$nom'>";
        echo "<input type='submit' value='Revenir à la page des compétences'>";
    echo "</form>";
}


    ?>
</body>
</html>