<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <section>
       <h1> Connexion OMNESmySKILLS</h1>
       <form action="traitementNouveauMDP.php" method="POST">  
        
           <label >Créez Mot de Passe</label>
           <input type="password" name="NVmdp">
           <label >Confirmer le mot de passe</label>
           <input type="password" name="NVmdp2">
           <input type="submit" value="Valider" name="boutton-valider">
       </form>
   </section> 

   
</body>
</html>