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
 include 'menuAdmin.php';
 include 'connexionBDD.php';
$sql = "SELECT nomClasse, nomPromo, nomEcole from classe JOIN promo ON classe.idPromo = promo.idPromo JOIN ecole ON promo.idEcole = ecole.idEcole";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


$sqlEcole = "SELECT idEcole, NomEcole FROM ecole";
$stmtEcole = $bdd->prepare($sqlEcole);
$stmtEcole->execute();
$ecole = $stmtEcole->fetchAll(PDO::FETCH_ASSOC);

$sqlClasse = "SELECT idClasse, nomClasse FROM classe";
$stmtClasse = $bdd->prepare($sqlClasse);
$stmtClasse->execute();
$classe = $stmtClasse->fetchAll(PDO::FETCH_ASSOC);

$sqlProf = "SELECT utilisateurs.idUtilisateur, utilisateurs.nom FROM utilisateurs JOIN profs 
ON utilisateurs.idUtilisateur = profs.idUtilisateur";
$stmtProf = $bdd->prepare($sqlProf);
$stmtProf->execute();
$prof = $stmtProf->fetchAll(PDO::FETCH_ASSOC);

$sqlMatiere = "SELECT idMatiere, nom FROM matieres";
$stmtMatiere = $bdd->prepare($sqlMatiere);
$stmtMatiere->execute();
$idMatiere = $stmtMatiere->fetchAll(PDO::FETCH_ASSOC);
?>

<div style="overflow-x:auto;">
<table>
        <tr>
            <th>Nom de la calsse</th>
            <th>Nom de la promo</th>
            <th>Nom de l'école</th>
        </tr>
        <?php
        if (count($result) > 0) {
            // Output data of each row
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>".$row["nomClasse"]."</td>";
                echo "<td>".$row["nomPromo"]."</td>";
                echo "<td>".$row["nomEcole"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
    </table>
    </div>

    <?php
    include "connexionBDD.php";

    $sql = "SELECT nomPromo, idPromo FROM promo";
    $stmtPromo = $bdd->prepare($sql);
    $stmtPromo->execute();
    $promo = $stmtPromo->fetchAll(PDO::FETCH_ASSOC);
    ?>

<div class="container1">
        <div>
        <form method="post" action="ajouterClasse.php">
            <p>
            Modifier la base de données : <br>
                <label for="prenom">Nom de la classe : </label> 
                <input type="text" name="nomClasse" id="nomClasse"> 
                <label for="classe">Sélectionnez une promo :</label>
    
            <select name="promo" id="promo">
                <?php foreach ($promo as $p) : ?>
                    <option value="<?php echo $p['idPromo']; ?>"><?php echo $p['nomPromo']; ?></option>
                <?php endforeach; ?>
            </select>
                <input type="submit" name="ajoutClasse" value="Ajouter la classe"> 
                <input type="submit" name="SuppClasse" value="Supprimer la classe"> 
            </p>
        </form>
        </div>
        <div>
        <form method="post" action="ajouterProfClasse.php">
            <p>
                <label for="prenom">Nom du professeur : </label> 
                <select name="prof" id="prof">
                <?php foreach ($prof as $p) : ?>
                    <option value="<?php echo $p['idUtilisateur']; ?>"><?php echo $p['nom']; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="prenom">Matière enseignée : </label> 
                <select name="matiere" id="matiere">
                <?php foreach ($idMatiere as $m) : ?>
                    <option value="<?php echo $m['idMatiere']; ?>"><?php echo $m['nom']; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="classe">Sélectionnez une classe :</label>
            <select name="ecole" id="ecole">
                <?php foreach ($classe as $c) : ?>
                    <option value="<?php echo $c['idClasse']; ?>"><?php echo $c['nomClasse']; ?></option>
                <?php endforeach; ?>
            </select>
                <input type="submit" value="Ajouter le professeur à la classe"> 
            </p>
        </form>
                </div>
        <br>
        <div>
        <form method="post" action="ajouterPromo.php">
            <p>
                <label for="prenom">Nom de la promo : </label> 
                <input type="text" name="nomPromo" id="nomPromo"> 
                <label for="classe">Sélectionnez une école :</label>
            <select name="ecole" id="ecole">
                <?php foreach ($ecole as $e) : ?>
                    <option value="<?php echo $e['idEcole']; ?>"><?php echo $e['NomEcole']; ?></option>
                <?php endforeach; ?>
            </select>
                <input type="submit" name="AjoutPromo" value="Ajouter la promo"> 
                <input type="submit" name="SuppPromo" value="Supprimer la promo"> 
            </p>
        </form>
            </div>
    <br>
</div>
        <div class="formModif">
        <form method="post" action="ajouterEcole.php">
            <p>
                <label for="prenom">Nom de l'école : </label> 
                <input type="text" name="nomEcole" id="nomEcole"> 
                <input type="submit" name="ajoutEcole" value="Ajouter l'école"> 

                <label for="classe">Sélectionnez l'école à supprimer :</label>
            <select name="ecole" id="ecole">
                <?php foreach ($ecole as $e) : ?>
                    <option value="<?php echo $e['idEcole']; ?>"><?php echo $e['NomEcole']; ?></option>
                <?php endforeach; ?>
                <input type="submit" name="suppEcole" value="Supprimer Ecole"> 

            </select>
            </p>
        </form>
        </div>

    </body>



<?php
include 'footer.php';

?>
</html>


