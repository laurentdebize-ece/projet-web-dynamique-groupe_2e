<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.j s"> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/j s/bootstrap.min.j s"> </script>
    <title>OMNESmySKILLS</title>
</head>
<body> 
<a id="titre" href="accueilProfs.php"><h1>OMNES MySkill</h1></a>
    <?php
    include 'affichage.php'
    ?>

    <h2><?php echo $titre; ?></h2>
    
    <nav>
    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <a href="accueilProfs.php"> Accueil </a>
                </div>
                <div class="col-sm-3">
                    <a href="competencesProfs.php"> Compétences </a>
                </div>
                <div class="col-sm-3">
                    <a href="classesProfs.php"> Mes classes </a>
                </div>
                <div class="col-sm-3">
                    <a href="compteProfs.php"> Mon compte </a>
                </div>
            </div>
    </div>
    </nav>
    
</body>
</html>

