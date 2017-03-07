<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php 
$nom = 'lacoste';
$prenom = 'aymeric';
$age = 22;
$killometre = 1;
$leBool = true;
$leString = 'Chaine';
$leInt = 666;
$leFloat = 3.3;

echo '<p id="test">Nom : '.$nom.'. Prenom : '.$prenom.'. Age : '.$age.'!</p>';

echo 'Killometre : '.$killometre.'</br>';
$killometre = 3;
echo 'Killometre : '.$killometre.'</br>';
$killometre = 125;
echo 'Killometre : '.$killometre.'</br>';

echo 'Le boolean est : '.$leBool.'.</br>Le string est : '.$leString.'.</br>Le INT est : '.$leInt.'.</br>Et enfin le float est : '.$leFloat.'.</br>';

?>


</body>
</html>
