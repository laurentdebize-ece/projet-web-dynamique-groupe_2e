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

    <button>Supprimer un/une prof</button>
    <button>Ajouter un/une prof</button>

</html>

</body>
<?php
include 'footer.php';
?>
</html>