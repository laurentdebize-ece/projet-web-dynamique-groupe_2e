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
    include "menuProfs.php";
    ?>
    <?php
    include("connexionBDD.php");

    $erreur = "";
    $idClasse = isset($_POST["classe"]) ? $_POST["classe"] : "";
    if ($idClasse == "") {
        $idClasse .= "La classe n'a pas pu être sélectionnée";
    }
    if ($erreur == "") {
        echo "";
    } else {
        echo "Erreur: <br>" . $erreur;
    }
    $sql = "SELECT utilisateurs.nom, utilisateurs.prenom
    FROM etudiants
    JOIN utilisateurs ON etudiants.idUtilisateur = utilisateurs.idUtilisateur
    WHERE etudiants.idClasse = :idClasse";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':idClasse', $idClasse);
    if ($stmt->execute()) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            echo $prenom . ' ' . $nom . '<br>';
        }
    }
    ?>
</body>
</html>