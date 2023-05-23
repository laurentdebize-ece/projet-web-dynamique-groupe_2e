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
 include 'menu.php';
 session_start();
 $utilisateur=$_SESSION['utilisateurs'];
 ?>

<div class="container1">
    <button id="btnCompte" onclick="window.location.href='infoCompteAdmin.php'">Information du compte</button> <br>
    <button id="btnCompte" onclick="window.location.href='modifierMdp.php'">Modifier votre Mot de passe</button><br>
    <button id="btnCompte" onclick="window.location.href='deconnexion.php'">Deconnexion</button>
</div>

<?php
include 'footer.php';
?>
</body>
</html>