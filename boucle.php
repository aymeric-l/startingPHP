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
$rigolo = 1;
$goQuinze = 1;

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

echo '</br>';

while($rigolo < 10){
	echo $rigolo.' ';
	$rigolo/2;
	$rigolo = $rigolo*3;
}
echo '</br>';
for($i = 1;$i <=15; $i++){
	echo 'On y arrive presque</br>';
}
echo '</br>';
for($i=20; $i!=0; $i--){
	echo 'C\'est presque bon</br>';
}
echo '</br>';
?>
</body>
</html>