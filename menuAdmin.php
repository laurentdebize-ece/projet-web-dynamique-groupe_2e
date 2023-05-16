<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMNESmySKILLS</title>
</head>
<body> 
    <h1>Omnes MySkill</h1>
    <?php
    include 'affichage.php'
    ?>
    <h2><?php echo $titre; ?></h2>
    
    <nav>
    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <a href="accueil.php"> Accueil </a>
                </div>
                <div class="col-sm-2">
                    <a href="competences.php"> Profs </a>
                </div>
                <div class="col-sm-2">
                    <a href="competences.php"> Matières </a>
                </div>
                <div class="col-sm-2">
                    <a href="classesProfs.php"> Classes </a>
                </div>
                <div class="col-sm-2">
                    <a href="classesProfs.php"> Compétences </a>
                </div>
                <div class="col-sm-2">
                    <a id="lastright" href="compte.php"> Mon compte </a>
                </div>
            </div>
        </div>
    </div>
    </nav>
    
</body>
</html>

