<?php
session_start();

include("connexionBDD.php");
$utilisateur=$_SESSION['utilisateurs'];
$nomM = isset($_POST["nom"]) ? $_POST["nom"] : "";



if (isset($_SESSION['page_precedente']) && $_SESSION['page_precedente'] == 'competencesAdmin.php'){ //on vérifie que la page précédente était competencesAdmin.php
    $nomC = isset($_POST["nomCompetence"]) ? $_POST["nomCompetence"] : "";
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
    if (isset($_POST['b1']) && $_POST['b1'] === 'Ajouter la compétence') { //permet d'ajouter une competence à la base de donne
        $req=$bdd->prepare("INSERT INTO `competences` (`idCompetence`, `nomCompetence`, `idMatiere`, `idEval`, `idUtilisateur`) VALUES (NULL,:nomC,:idM,0,:idU)");
        $params = array( 'nomC'=> $nomC, 'idM'=>$idMatiereValue, 'idU'=>$utilisateur['idUtilisateur']);
        $req->execute($params);
        header("Location:competencesAdmin.php");
    } else if(isset($_POST['b2']) && $_POST['b2'] === 'Supprimer la compétence') {//permet de supprimer une competence à la base de donne
        $req2=$bdd->prepare("DELETE FROM competences WHERE idCompetence= :idC AND idMatiere= :idM;");
        $param = array('idC'=>$idvaleurCompetence, 'idM'=>$idMatiereValue);
        $req2->execute($param);
        header("Location:competencesAdmin.php");
    }
    
} else if (isset($_SESSION['page_precedente']) && $_SESSION['page_precedente'] == 'matieresAdmin.php'){//on vérifie que la page précédente était matiereAdmin.php
    //on recupère l'id de la matière
    $idMatiere=$bdd->prepare("SELECT idMatiere FROM matieres WHERE nom= :nomM");
    $p2=array('nomM'=>$nomM);
    $idMatiere->execute($p2);
    $idMatiereRow = $idMatiere->fetch(); 
    $idMatiereValue = $idMatiereRow['idMatiere'];
    if(isset($_POST['button1']) && $_POST['button1'] === 'Ajouter la matière'){//permet d'ajouter une matière à la base de donne
        echo"test2";
        $nbHeures = isset($_POST["heures"]) ? $_POST["heures"] : "";
        $req=$bdd->prepare("INSERT INTO `matieres` ( `idMatiere`,`nom`,`NbHeures` ) VALUES (NULL,:nomMatiere,:heuresMatiere)");
        $params = array( 'nomMatiere'=> $nomM,'heuresMatiere'=>$nbHeures);
        $req->execute($params);
        header("Location:matieresAdmin.php");
    }else if(isset($_POST['button2']) && $_POST['button2'] === 'Supprimer la matière'){//permet de supprimer une matière à la base de donne
        $req2=$bdd->prepare("DELETE FROM matieres WHERE  idMatiere= :idM;");
        $param = array( 'idM'=>$idMatiereValue);
        $req2->execute($param);
        header("Location:matieresAdmin.php");
    }

}else if (isset($_SESSION['page_precedente']) && $_SESSION['page_precedente'] == 'profsAdmin.php'){ //on vérifie que la page précédente était profsAdmin.php
    $nomProf = isset($_POST["nomProf"]) ? $_POST["nomProf"] : "";
    $prenomProf = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
    $mailProf = isset($_POST["mailP"]) ? $_POST["mailP"] : "";    
    if(isset($_POST['button1']) && $_POST['button1'] === 'Ajouter professeur/e'){//permet d'ajouter une matière à la base de donne
        //on ajoute un nouvel utilisateur étant un prof dans la table utilisateur
        $req=$bdd->prepare("INSERT INTO `utilisateurs` ( `idUtilisateur`,`prenom`,`nom`,`mdp`,`rang`,`mail` ) VALUES (NULL,:prenomProf,:nomProf,'',2,:mail)");
        $params = array( 'prenomProf'=> $prenomProf,'nomProf'=>$nomProf,'mail'=>$mailProf);
        $req->execute($params);
        //on créee on nouveau prof dans la table prof de la base de donne et lui assigne un identifiant prof 
        $idUtilisateurProf=$bdd->prepare("SELECT idUtilisateur FROM utilisateurs WHERE mail= :mailProf ");
        $paramIdU=array('mailProf'=>$mailProf);
        $idUtilisateurProf->execute($paramIdU);
        $result = $idUtilisateurProf->fetch(); 
        $valeurIdUtilisateur = $result['idUtilisateur'];

        $insert=$bdd->prepare("INSERT INTO `profs` ( `idProf`,`idUtilisateur`) VALUES (NULL,:idU) ");
        $param2=array('idU'=>$valeurIdUtilisateur);
        $insert->execute($param2);

        // on relie le prof à la matière qu'il enseigne 
        //on recupère l'id de la matière
    $idMatiere=$bdd->prepare("SELECT idMatiere FROM matieres WHERE nom= :nomM");
    $p2=array('nomM'=>$nomM);
    $idMatiere->execute($p2);
    $idMatiereRow = $idMatiere->fetch(); 
    $idMatiereValue = $idMatiereRow['idMatiere'];

    $idProf=$bdd->prepare("SELECT idProf FROM profs WHERE idUtilisateur= :idU");
    $pProf=array('idU'=>$valeurIdUtilisateur);
    $idProf->execute($pProf);
    $resultProf = $idProf->fetch(); 
    $valueIdProf = $resultProf['idProf'];

    $relierPCM=$bdd->prepare("INSERT INTO `enseignement` ( `idClasse`,`idProf`,`idMatiere` ) VALUES (0,:idProf,:idMatiere)");
    $paramRelier=array('idProf'=>$valueIdProf,'idMatiere'=>$idMatiereValue);
    $relierPCM->execute($paramRelier);
    header("Location:profsAdmin.php");
    }else if(isset($_POST['button2']) && $_POST['button2'] === 'Supprimer professeur/e'){//permet de supprimer une matière à la base de donne
        /*
        $req2=$bdd->prepare("DELETE FROM utilisateurs WHERE  mail= :mail;");
        $param = array( 'mail'=>$mailProf);
        $req2->execute($param);
        header("Location:profsAdmin.php");
        */
    }

}
// Réinitialise la variable de session pour éviter les conflits
unset($_SESSION['page_precedente']);

?>