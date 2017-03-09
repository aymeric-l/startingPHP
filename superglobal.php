<!DOCTYPE html>
<html>
<head>
	<title>SUPERGLOBAL</title>
</head>
<body>
<?php 
session_start();
$_SESSION['nom'] = 'Lacoste';
$_SESSION['prenom']= 'Aymeric';
$_SESSION['age']= '22';

echo 'Nom du serveur : '.$_SERVER['SERVER_NAME'];
echo "<br>";
echo 'L\'user agent : '.$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo 'L\'adresse IP : '.$_SERVER['SERVER_ADDR'].'</br>';

?>
<a href="superglobalDeux.php">EXO VARIABLE SESSION</a>
</br></br>

<form action="superglobalDeux.php" method="post">
	<input type="text" name="pseudo">
	<input type="text" name="password">
	<input type="submit" name="Envoi">
</form>

</body>
</html>
