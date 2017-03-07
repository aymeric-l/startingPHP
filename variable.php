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
$leString = 'Chaine';
$leInt = 666;
$leFloat = 3.3;
$leBool = true;
$entier = (int)null;
$NOM = 'Jacquie';
$PRENOM = 'Michel';
$AGE = 69;


echo '<h2>Exo 1 et 2</h2>';
echo '<p id="test">Nom : '.$nom.'. Prenom : '.$prenom.'. Age : '.$age.'!</p>';

echo '<h2>Exo 3</h2>';
echo 'Killometre : '.$killometre.'</br>';
$killometre = 3;
echo 'Killometre : '.$killometre.'</br>';
$killometre = 125;
echo 'Killometre : '.$killometre.'</br>';

echo '<h2>Exo 4</h2>';
echo 'Le boolean est : '.$leBool.'.</br>Le string est : '.$leString.'.</br>Le INT est : '.$leInt.'.</br>Et enfin le float est : '.$leFloat.'.</br></br>';
echo '<h2>Exo 5</h2>';
echo 'Entier était egal à : '.$entier;
$entier = 10;
echo '. Il est maintenant de : '.$entier;
$Nom = 'José';
echo '<h2>Exo 5</h2>';
echo 'Bonjour '.'<span style="color:red">'.$Nom.'</span>'.', comment vas-tu ?</br>';
'<h2>Exo 6</h2>';
echo 'Bonjour '.'<span style="color:red">'.$NOM.' '.$PRENOM.'. Tu as '.$AGE.' ans.</span>';
?>

</body>
</html>
