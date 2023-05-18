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
        $titre = "Toutes mes compétences";
        break;
    case "evaluer.php":
          $titre = "Evaluer mes compétences";
          break;
    case "envoiEvalBDD.php":
        $titre = "Confirmation enregistrement";
        break;      
               

    // Ajoute d'autres pages et titres si nécessaire
    default:
      $titre = "Mon site";
  }
?>