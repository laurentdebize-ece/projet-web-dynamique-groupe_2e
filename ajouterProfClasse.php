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
 include 'menuAdmin.php';
 include 'connexionBDD.php';

 $idProf = isset($_POST["prof"]) ? $_POST["prof"] : "";
 $idClasse = isset($_POST["ecole"]) ? $_POST["ecole"] : "";

 $sql = "SELECT matieres.idMatiere
        FROM matieres
        JOIN enseignement ON matieres.idMatiere = enseignement.idMatiere
        WHERE enseignement.idProf = :idProf";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':idProf', $idProf);
$stmt->execute();
$idMatiere = $stmt->fetchColumn();



$sqlAjoutClasse = "INSERT INTO enseignement (idClasse, idProf, idMatiere) VALUES (:idClasse, :idProf, :idMatiere)";
$stmtC = $bdd->prepare($sqlAjoutClasse);
$stmtC->bindParam(':idClasse', $idClasse);
$stmtC->bindParam(':idProf', $idProf);
$stmtC->bindParam(':idMatiere', $idMatiere);
$stmtC->execute();

echo "<p> Le professeur a bien été affecté à la classe. </p> <br>";
echo "<form action='classesAdmin.php' method ='post'>";
echo "<input type = 'submit' value = 'Revenir à la page des classes'>";
echo "</form>";
 ?>

</body>
</html>