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
 ?>

<?php
include("connexionBDD.php");

session_start();

$idUtilisateur = isset($_SESSION['utilisateurs']['idUtilisateur']) ? $_SESSION['utilisateurs']['idUtilisateur'] : null;
//avoir l'id du prof
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

$sqlMatiere = "SELECT idMatiere FROM enseignement WHERE idProf = :idProf";
$stmtMatiere = $bdd->prepare($sqlMatiere);
$stmtMatiere->bindParam(':idProf', $idProf);
$stmtMatiere->execute();
$idMatiere = $stmtMatiere->fetchColumn();

?>
<div class="container2">
    <p>Voir les compétences des élèves:</p><br>
    <form action="voirCompetencesProfs.php" method = "post">
    <input type="hidden" name ="matiere" value ="<?php echo $idMatiere; ?>" > <br>
    <label for="classe">Sélectionnez une classe :</label>
            <select name="classe" id="classe">
                <?php foreach ($classes as $classe) : ?>
                    <option value="<?php echo $classe['idClasse']; ?>"><?php echo $classe['nomClasse']; ?></option>
                <?php endforeach; ?>
                <label for="nom">Nom de la compétence : </label> <br>
                <input type="text" name="nom" id="nom"> <br>
            </select>
            
            <br>
    
            <input type="submit" value="Voir les évaluations des compétences">
    
    </form>
    <br><br><br>
    <p>Ajouter une nouvelle compétence :</p><br>
    <form action="ajouterCompetencesProfs.php" method = "post">
    <input type="hidden" name ="matiere" value ="<?php echo $idMatiere; ?>" > <br>
    <label for="classe">Sélectionnez une classe :</label>
            <select name="classe" id="classe">
                <?php foreach ($classes as $classe) : ?>
                    <option value="<?php echo $classe['idClasse']; ?>"><?php echo $classe['nomClasse']; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
    
            <label for="nomCompetence">Nom de la compétence :</label>
            <input type="text" name="nomCompetence" id="nomCompetence">
    
            <br>
    
            <input type="submit" value="Ajouter la compétence">
    
    </form>
</div>

</body>
<?php
include 'footer.php';
?>
</html>