<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Omnes MySkill</h1>
    <?php
    include 'affichage.php'
    ?>
    <h2><?php echo $titre; ?></h2>
    
    <nav>
    <ul>
        <li> <a href="accueilProfs.php"> Accueil   </a> </li>
        <li> <a href="classesProfs.php"> Mes classes </a> </li>
        <li> <a href="competencesProfs.php"> Compétences</a> </li>
        <li> <a href="compteProfs.php"> Mon compte</a> </li>

    </ul>
    </nav>
    
</body>
</html>

