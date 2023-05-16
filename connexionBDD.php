<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=bdece;
charset=utf8', 'root', '',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

?>