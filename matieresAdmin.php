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
$sql = "SELECT * FROM matieres";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
session_start();

// Enregistre le nom de la page précédente dans une variable de session
$_SESSION['page_precedente'] = basename($_SERVER['PHP_SELF']);
?>

<div style="overflow-x:auto;">
<table>
        <tr>
            <th>Nom</th>
            <th>Nb heures</th>
        </tr>
        <?php
        if (count($result) > 0) {
            // Output data of each row
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>".$row["nom"]."</td>";
                echo "<td>".$row["NbHeures"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
    </table>
    </div>

    <div class="formModif">
        <form method="post" action="ajoutSuppElements.php">
            <p>
                <label for="nom">Nom de la matière : </label> <br>
                <input type="text" name="nom" id="nom"> <br>
                <label for="nom">Nombres d'heures : </label> <br>
                <input type="number" name="heures" id="heures"> <br>
                <input type="submit" name="button1" value="Ajouter la matière"> 
                <input type="submit" name="button2" value="Supprimer la matière"> 
            </p>
        </form>
    </div>

</html>
</body>
<?php
include 'footer.php';
?>
</html>