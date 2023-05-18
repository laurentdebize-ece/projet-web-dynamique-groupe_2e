<?php
include("connexionBDD.php");

// Récupérer la matière sélectionnée
$matiere = isset($_POST["matiere"]) ? $_POST["matiere"] : "";

$erreur = "";
if ($matiere == "") {
    $erreur .= "La matière n'a pas pu être sélectionnée";
}

if ($erreur == "") {
    echo "";
} else {
    echo "Erreur: <br>" . $erreur;
}

// Récupérer toutes les compétences associées à la matière dans la base de données
$sql = $bdd->prepare("SELECT * FROM competences WHERE idMatiere = :matiere");
$params = array('matiere' => $matiere);
$sql->execute($params);
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";

foreach ($result as $row) {
    $competence_id = $row['idCompetence'];
    $competence_nom = $row['nomCompetence'];
    $idEval = $row['idEval'];

    echo "<li>$competence_nom ";
    echo "<form action='envoiEvalBDD.php' method='POST'>";
    echo "<input type='hidden' name='competence_id' value='$competence_id'>";
    echo "<input type='hidden' name='matiere' value='$matiere'>";

    if ($idEval == 1) {
        echo "<input type='radio' name='eval' value='1' checked> Acquis ";
    } else {
        echo "<input type='radio' name='eval' value='1'> Acquis ";
    }

    if ($idEval == 2) {
        echo "<input type='radio' name='eval' value='2' checked> En cours ";
    } else {
        echo "<input type='radio' name='eval' value='2'> En cours ";
    }

    if ($idEval == 3) {
        echo "<input type='radio' name='eval' value='3' checked> Non acquis ";
    } else {
        echo "<input type='radio' name='eval' value='3'> Non acquis ";
    }

    echo "<input type='submit' value='Enregistrer'>";
    echo "</form></li>";
}

echo "</ul>";


?>