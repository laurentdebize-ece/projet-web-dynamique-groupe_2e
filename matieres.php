<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_menu.css">
    <link rel="stylesheet" type="text/css" href="style_footer.css">


    <title>Matieres</title>
    <link rel=" stylesheet " href="matieres.css">

</head>

<body>
    <?php
    include 'menu.php';
    include("matieresBDD.php");

    ?>


    <div id="scrollcontainer">
        <div id="containertrue">
        <form action="evaluer.php" method="POST">
            <input type="hidden" name="matiere" value="1">
            <button type="submit" class="Matiere">
                <p> Mathématiques</p>
            </button>
        </form>
                </div>
            </a>
            <a href="competences.php">
                <div class="Matiere">
                    <p> Matière 2</p>
                </div>
            </a>
            <a href="competences.php">
                <div class="Matiere">
                    <p> Matière 3</p>
                </div>
            </a>
            <a href="competences.php">
                <div class="Matiere">
                    <p> Matière 4</p>
                </div>
            </a>
            <a href="competences.php">
                <div class="Matiere">
                    <p> Matière 5</p>
                </div>
            </a>
            <a href="competences.php">
                <div class="Matiere">
                    <p> Matière 6</p>
                </div>
            </a>
            <a href="competences.php">
                <div class="Matiere">
                    <p> Matière 7</p>
                </div>
            </a>
            <a href="competences.php">
                <div class="Matiere">
                    <p> Matière 8</p>
                </div>
            </a>
            <a href="competences.php">
                <div class="Matiere">
                    <p> Matière 9</p>
                </div>
            </a>
            <a href="competences.php">
                <div class="Matiere">
                    <p> Matière 10</p>
                </div>
        </div>

    </div>



</body>

</html>