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

 $idPromo = isset($_POST["nomEcole"]) ? $_POST["nomEcole"] : "";
$sqlAjoutClasse = "INSERT INTO ecole (idEcole, nomEcole) VALUES (NULL, :idPromo)";
$stmtC = $bdd->prepare($sqlAjoutClasse);
$stmtC->bindParam(':idPromo', $idPromo);
$stmtC->execute();

echo "<p> L'école a bien été ajoutée. </p> <br>";
echo "<form action='classesAdmin.php' method ='post'>";
echo "<input type = 'submit' value = 'Revenir à la page des classes'>";
echo "</form>";
 ?>

</body>
</html>