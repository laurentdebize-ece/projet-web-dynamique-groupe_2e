<?php
$mail=isset($_POST["email"])? $_POST["email"] : "";
$mdp=isset($_POST["mdp"])? $_POST["mdp"] : "";
# On vérifie qu'il n'y a pas d'erreur et que tous les champs sont remplis
$erreur="";
if($mail ==""){
    $erreur.= "Veuillez renseigner votre mail de lié au groupe Omnes.<br>";
}
if($mdp ==""){
    $erreur.= " Mot de passe non renseigné.<br>";
}
if($erreur== ""){
}
else{
    echo "Une erreur est servenue:".$erreur;
}
#On se connecte à la base de donné et on effectue nos requetes afin de vérifier
#que les identifiants correspondent à ceux de notre base de donne


$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, "bdece");

if ($db_found){

    $req = mysqli_query($db_handle, "SELECT mail, mdp FROM utilisateurs WHERE mail='$mail' AND mdp='$mdp'");
    $num_ligne = mysqli_num_rows($req) ;
    if($num_ligne){
        header("Location: accueil.php");
    }
    else{
        $erreur="Mot de passe ou identifiant incorect <br>";
        echo "Une erreur est servenue:".$erreur;
    }

}
?>
