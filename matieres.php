<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_menu.css">
    <link rel="stylesheet" type="text/css" href="style_footer.css">


    <title>Document</title>
</head>
<body>
<?php
 include 'menu.php';
 ?>
<form method="POST" action="evaluer.php">
		<label for="matiere">Sélectionnez une matière:</label>
		<select name="matiere" id="matiere">
			<option value="1">Mathématiques</option>
			<option value="francais">Français</option>
			<option value="histoire">Histoire</option>
			<!-- Ajouter d'autres options ici -->
		</select>
		<br><br>
		<input type="submit" value="Valider">
	</form>
<?php
include 'footer.php';
?>
</body>
</html>