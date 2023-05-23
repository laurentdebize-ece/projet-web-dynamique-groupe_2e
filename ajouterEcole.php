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

    if (isset($_POST['ajoutEcole']) && $_POST['ajoutEcole'] === "Ajouter l'école"){
        $idPromo = isset($_POST["nomEcole"]) ? $_POST["nomEcole"] : "";
        $sqlAjoutClasse = "INSERT INTO ecole (idEcole, nomEcole) VALUES (NULL, :idPromo)";
        $stmtC = $bdd->prepare($sqlAjoutClasse);
        $stmtC->bindParam(':idPromo', $idPromo);
        $stmtC->execute();
        
        echo "<p> L'école a bien été ajoutée. </p> <br>";
        echo "<form action='classesAdmin.php' method ='post'>";
        echo "<input type = 'submit' value = 'Revenir à la page des classes'>";
        echo "</form>";

    }else if(isset($_POST['suppEcole']) && $_POST['suppEcole'] === "Supprimer Ecole"){
        $idEcoleValue = isset($_POST["ecole"]) ? $_POST["ecole"] : "";
        $reqSuppEcole=$bdd->prepare("DELETE FROM ecole WHERE idEcole=:idEcole ");
        $preqSuppEcole=array('idEcole'=>$idEcoleValue);
        $reqSuppEcole->execute($preqSuppEcole);

        echo "<p> L'école a bien été supprimée. </p> <br>";
        echo "<form action='classesAdmin.php' method ='post'>";
        echo "<input type = 'submit' value = 'Revenir à la page des classes'>";
        echo "</form>";

    }

 
 
 ?>

</body>
</html>