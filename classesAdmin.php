<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_menu.css">
    <link rel="stylesheet" type="text/css" href="style_footer.css">
    <title>OMNESmySKILLS</title>
</head>

<body>
<?php
 include 'menuAdmin.php';
 include 'connexionBDD.php';
$sql = "SELECT nomClasse, nomPromo, nomEcole from classe JOIN promo ON classe.idPromo = promo.idPromo JOIN ecole ON promo.idEcole = ecole.idEcole";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<div style="overflow-x:auto;">
<table>
        <tr>
            <th>Nom de la calsse</th>
            <th>Nom de la promo</th>
            <th>Nom de l'école</th>
        </tr>
        <?php
        if (count($result) > 0) {
            // Output data of each row
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>".$row["nomClasse"]."</td>";
                echo "<td>".$row["nomPromo"]."</td>";
                echo "<td>".$row["nomEcole"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
    </table>
    </div>

    <form method="post" action="ajoutSuppElements.php">
        <p>
        Modifier la base de données : <br>
            <label for="prenom">Nom de la classe : </label> 
            <input type="text" name="nomClasse" id="nomClasse"> 
            <label for="nom">Nom de la promo de la classe : </label>
            <input type="text" name="nomPromo" id="nomPromo"> 
            <input type="submit" value="Ajouter la classe"> 
            <input type="submit" value="Supprimer la classe"> 
        </p>
    </form>
    </body>
<?php
include 'footer.php';
?>
</html>