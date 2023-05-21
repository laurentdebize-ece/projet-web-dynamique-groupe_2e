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
// Fetch data from the database
$sql = "SELECT nom, nomCompetence from matieres JOIN competences ON matieres.idMatiere = competences.idMatiere";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div style="overflow-x:auto;">
<table>
        <tr>
            <th>Nom de la compétence</th>
            <th>Nom de la matière</th>
        </tr>
        <?php
        if (count($result) > 0) {
            // Output data of each row
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>".$row["nomCompetence"]."</td>";
                echo "<td>".$row["nom"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
    </table>
    </div> <br>

    <div class="formModif">
    <form method="post" action="ajoutSuppElements.php">
        <p>
            <label for="prenom">Nom de la compétence : </label> <br>
            <input type="text" name="nomCompetence" id="nomCompetence"> <br>
            <label for="nom">Nom de la matière : </label> <br>
            <input type="text" name="nom" id="nom"> <br>
            <input type="submit" name="b1" value="Ajouter la compétence"> <br>
            <input type="submit" name="b2" value="Supprimer la compétence"> <br>
        </p>
    </form>
    </div>

</body>
<?php
include 'footer.php';
?>
</html>