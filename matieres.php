<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_menu.css">
    <link rel="stylesheet" type="text/css" href="style_footer.css">
    <title>Matieres</title>
    <link rel="stylesheet" href="matieres.css">
</head>
<body>
    <?php
    include 'menu.php';
    include 'connexionBDD.php';
    session_start();
    $utilisateur = $_SESSION['utilisateurs'];
    $sql = "SELECT matieres.idMatiere, matieres.nom
    FROM matieres
    JOIN enseignement ON matieres.idMatiere = enseignement.idMatiere
    JOIN etudiants ON enseignement.idClasse = etudiants.idClasse
    WHERE etudiants.idEtudiant = :idUtilisateur";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':idUtilisateur', $utilisateur['idUtilisateur']);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div id="scrollcontainer">
        <div id="containertrue">
            <form action="evaluer.php" method="POST">
                <?php foreach ($result as $r) : ?>
                    <button type="submit" class="Matiere" id="<?php echo $r['idMatiere']; ?>">
                        <p><?php echo $r['nom']; ?></p>
                    </button>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>