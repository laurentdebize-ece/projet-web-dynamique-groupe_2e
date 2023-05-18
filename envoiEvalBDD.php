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
    include 'menu.php'
    ?>
<?php
session_start();


try {
    $bdd = new PDO('mysql:host=localhost;dbname=bdece;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
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

if ($stmt->execute()) {
    echo "<form action='evaluer.php' method='POST'>";
    echo "<input type='hidden' name='matiere' value='$matiere'>";
    echo "L'évaluation de la competence a bien été enregistrée";
    echo "<input type='submit' value='Revenir à la page des compétences'>";
    echo "</form>";



} else {
    echo "Erreur lors de la mise à jour de la valeur d'évaluation.";
    echo "<form action='evaluer.php' method='POST'>";
    echo "<input type='hidden' name='matiere' value='$matiere'>";
    echo "<input type='submit' value='Revenir à la page des compétences'>";
    echo "</form>";
}
?>

</body>
</html>



