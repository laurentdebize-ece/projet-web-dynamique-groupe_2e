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
 include 'menuProfs.php';
 session_start();
 $utilisateur=$_SESSION['utilisateurs'];
 ?>

<button onclick="window.location.href='infoCompteProfs.php'">Information du compte</button> <br>
<button onclick="window.location.href='modifierMdp.php'">Modifier votre Mot de passe</button><br>
<button onclick="window.location.href='deconnexion.php'">Deconnexion</button>


<?php
include 'footer.php';
?>
</body>
</html>