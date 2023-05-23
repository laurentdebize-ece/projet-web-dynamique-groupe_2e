<?php
  // Récupère le chemin de la page courante
  $page = $_SERVER['PHP_SELF'];

  // Récupère le nom de la page à partir du chemin
  $page = basename($page);

  // Initialise une variable pour stocker le titre de la page
  $titre = "";

  // Définit le titre en fonction de la page courante
  switch($page) {
    case "accueil.php":
      $titre = "Page d'accueil";
      break;
    case "accueilProf.php":
      $titre = "Page d'accueil";
      break;
    case "accueilAdmin.php":
      $titre = "Page d'accueil";
      break;
    case "competences.php":
      $titre = "Mes compétences";
      break;
    case "compte.php":
      $titre = "Mon compte";
      break;
    case "matieres.php":
        $titre = "Mes matières";
        break;
    case "competences trans.php":
        $titre = "Compétences transverses";
        break;
    case "toutes competences.php":
        $titre = "Toutes les compétences";
        break;
    case "evaluer.php":
          $titre = "Evaluer mes compétences";
          break;
    case "profsAdmin.php":
          $titre = "Gestion des profs";
          break; 
    case "classesAdmin.php":
          $titre = "Gestion des classes";
          break; 
    case "matieresAdmin.php":
          $titre = "Gestion des matières";
          break; 
    case "competencesAdmin.php":
          $titre = "Gestion des compétences";
          break;
    case "compteAdmin.php":
          $titre = "Mon compte";
          break;
    case "envoiEvalBDD.php":
        $titre = "Confirmation enregistrement";
        break;
      case "accueilProfs.php":
          $titre = "Accueil";
          break; 
      case "compteProfs.php":
          $titre = "Mon compte";
          break;
      case "InfosCompteProfs.php":
          $titre = "Mon compte";
          break;
      case "InfosCompte.php":
          $titre = "Mon compte";
          break;
      case "InfosCompteAdmin.php":
          $titre = "Mon compte";
          break;
      case "classesProfs.php":
          $titre = "Mes classes";
          break;   
      case "competencesProfs.php":
          $titre = "Compétences";
          break;
      case "voirCompetencesProfs.php":
          $titre = "Voir les compétences";
          break;
      case "ajouterCompetencesProfs.php":
          $titre = "Ajouter une compétences";
          break;          
               

    // Ajoute d'autres pages et titres si nécessaire
    default:
      $titre = "Mon site";
  }
?>