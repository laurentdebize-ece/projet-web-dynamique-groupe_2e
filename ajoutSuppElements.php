<?php
session_start();

include("connexionBDD.php");
$utilisateur=$_SESSION['utilisateurs'];

$nomC = isset($_POST["nomCompetence"]) ? $_POST["nomCompetence"] : "";
$nomM = isset($_POST["nom"]) ? $_POST["nom"] : "";

//on recupère l'id de la matière
$idMatiere=$bdd->prepare("SELECT idMatiere FROM matieres WHERE nom= :nomM");
$p2=array('nomM'=>$nomM);
$idMatiere->execute($p2);
$idMatiereRow = $idMatiere->fetch(); 
$idMatiereValue = $idMatiereRow['idMatiere'];

//on recupère l'id de la competence
$idCompetence=$bdd->prepare("SELECT idCompetence FROM  competences WHERE nomCompetence= :nomC");
$p=array('nomC'=>$nomC);
$idCompetence->execute($p);
$idCompetenceeRow = $idCompetence->fetch(); 
$idvaleurCompetence = $idCompetenceeRow['idCompetence'];

    if (isset($_POST['b1']) && $_POST['b1'] === 'Ajouter la compétence') {
        echo "test3" ;
        $req=$bdd->prepare("INSERT INTO `competences` (`idCompetence`, `nomCompetence`, `idMatiere`, `idEval`, `idUtilisateur`) VALUES (NULL,:nomC,:idM,0,:idU)");
        $params = array( 'nomC'=> $nomC, 'idM'=>$idMatiereValue, 'idU'=>$utilisateur['idUtilisateur']);
        $req->execute($params);
        header("Location:competencesAdmin.php");
    } else if(isset($_POST['b2']) && $_POST['b2'] === 'Supprimer la compétence') {
        $req2=$bdd->prepare("DELETE FROM competences WHERE idCompetence= :idC AND idMatiere= :idM;");
        $param = array('idC'=>$idvaleurCompetence, 'idM'=>$idMatiereValue);
        $req2->execute($param);
        header("Location:competencesAdmin.php");
    }

?>