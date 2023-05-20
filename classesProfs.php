<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_menu.css">

    <title>Document</title>
</head>
<body>
<?php
 include 'menuProfs.php';
 ?>

<?php
include("connexionBDD.php");

session_start();

$idUtilisateur = isset($_SESSION['utilisateurs']['idUtilisateur']) ? $_SESSION['utilisateurs']['idUtilisateur'] : null;

$query = "SELECT idProf FROM profs WHERE idUtilisateur = :idUtilisateur";
$stmt = $bdd->prepare($query);
$stmt->bindParam(':idUtilisateur', $idUtilisateur);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$idProf = $row['idProf'];
$sql = "SELECT classe.idClasse, classe.nomClasse FROM classe INNER JOIN enseignement ON classe.idClasse = enseignement.idClasse WHERE enseignement.idProf = :idProf";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':idProf', $idProf);
$stmt->execute();
$classes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<form action="voirCompetencesProfs.php" method = "post">
<label for="classe">Sélectionnez une classe :</label>
        <select name="classe" id="classe">
            <?php foreach ($classes as $classe) : ?>
                <option value="<?php echo $classe['idClasse']; ?>"><?php echo $classe['nomClasse']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Valider">

</form>

</body>
</html>