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
?>

    <form method="post" action="ajoutSuppElements.php">
        <p>
            <label for="prenom">Nom de la classe : </label> <br>
            <input type="text" name="nomClasse" id="nomClasse"> <br>
            <label for="nom">Nom de la promo de la classe : </label> <br>
            <input type="text" name="nomPromo" id="nomPromo"> <br>
            <input type="submit" value="Ajouter la classe"> <br>
            <input type="submit" value="Supprimer la classe"> <br>
        </p>
    </form>

<?php
include 'footer.php';
?>
</html>