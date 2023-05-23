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
    <p>
        Nom: <?php echo $utilisateur['nom']; ?><br>
        Prenom: <?php echo $utilisateur['prenom']; ?><br>
        E-mail: <?php echo $utilisateur['mail']; ?><br>
    </p>
    <button onclick="window.location.href='compte.php'">Retour </button>
</body>
<?php
include 'footer.php';
?>
</html>