<?php
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