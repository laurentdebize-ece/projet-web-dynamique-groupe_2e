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
    include 'menuInfosCompte.php';
    session_start();
    include("connexionBDD.php");
    $utilisateur=$_SESSION['utilisateurs'];
    ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-mail</th>
        </tr>
        <tr>
            <td>
            <?php echo $utilisateur['nom']; ?>
            </td>
            <td>
            <?php echo $utilisateur['prenom']; ?>
            </td>
            <td>
            <?php echo $utilisateur['mail']; ?>
            </td>
        </tr>
    </table>
    <button id="retour" onclick="window.location.href='compteProfs.php'">Retour </button>
</body>
<?php
include 'footer.php';
?>
</html>