<!DOCTYPE html>
<html>
<head>
	<title>WHAOU CA C'EST DE LA BOUCLE PAS FACILE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php 
$boucleDix = 0;
$partieDeux = 0;
$partieDeuxChoix = 3;
$partieTroisCent = 100;
$partieTrois = 10;

while($boucleDix != 10){
	echo $boucleDix;
	$boucleDix++;
}
echo '</br>';

while($partieDeux <= 20){
	echo $partieDeux*$partieDeuxChoix.' ';
	$partieDeux++;
}
echo '</br>';
while($partieTroisCent >= 10){
	echo ($partieTroisCent*$partieTrois).' ';
	$partieTroisCent--;
}

?>
</body>
</html>

