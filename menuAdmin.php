<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/j s/bootstrap.min.j s"> </script>
    <title>OMNESmySKILLS</title>
</head>
<body> 
<a id="titre" href="accueilAdmin.php"><h1>OMNES MySkill</h1></a>
    <?php
    include 'affichage.php'
    ?>

    <h2><?php echo $titre; ?></h2>
    
    <nav>
    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <a href="accueilAdmin.php"> Accueil </a>
                </div>
                <div class="col-sm-2">
                    <a href="profsAdmin.php"> Profs </a>
                </div>
                <div class="col-sm-2">
                    <a href="matieresAdmin.php"> Matières </a>
                </div>
                <div class="col-sm-2">
                    <a href="classesAdmin.php"> Classes </a>
                </div>
                <div class="col-sm-2">
                    <a href="competencesAdmin.php"> Compétences </a>
                </div>
                <div class="col-sm-2">
                    <a id="lastright" href="compteAdmin.php"> Mon compte </a>
                </div>
            </div>
        </div>
    </div>
    </nav>
    
</body>
</html>

