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
$sql = "SELECT * FROM utilisateurs WHERE rang=2";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
session_start();
$_SESSION['page_precedente'] = basename($_SERVER['PHP_SELF']);
?>

<div style="overflow-x:auto;">
<table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
        <?php
        if (count($result) > 0) {
            // Output data of each row
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>".$row["nom"]."</td>";
                echo "<td>".$row["prenom"]."</td>";
                echo "<td>".$row["mail"]."</td>";
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
         <br>
            <label for="nom">Nom professeur : </label> <br>
            <input type="text" name="nomProf" id="nomProf"> <br>
            <label for="nom">Prénom professeur : </label> <br>
            <input type="text" name="prenom" id="prenom"> <br>
            <label for="nom">Mail professeur : </label> <br>
            <input type="text" name="mailP" id="mailP"> <br>
            <label for="nom">Nom de la matière enseigné : </label> <br>
            <input type="text" name="nom" id="nom"> <br>
            <input type="submit" name="button1" value="Ajouter professeur/e"> 
            <input type="submit" name="button2" value="Supprimer professeur/e"> 
        </p>
    </form>
    </div>

</html>

</body>
<?php
include 'footer.php';
?>
</html>