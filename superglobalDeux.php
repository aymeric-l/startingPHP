<?php 
session_start();
echo 'Les variables sessions ont permis de garder : '.$_SESSION['nom'].'</br>';
echo 'Les variables sessions ont permis de garder : '.$_SESSION['prenom'].'</br>';
echo 'Les variables sessions ont permis de garder : '.$_SESSION['age'].'</br>';

$_COOKIE['pseudo'] = $_POST['pseudo'];
$_COOKIE['password'] = $_POST['password'];

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

setcookie("pseudo", $pseudo, time()+3600);
setcookie("password", $password, time()+3600);

echo '</br>Cookie pseudo est : '.$pseudo.'</br>';
echo 'Cookie password est : '.$password.'</br></br>';

if(isset($_COOKIE['pseudo'],$_COOKIE['password'])){
	$cookiepseudo = $_COOKIE['pseudo'];
	$cookiepassword = $_COOKIE['password'];
	echo '<form action="superglobalDeux.php" method="post">
	<input type="text" name="pseudo" value="'.$cookiepseudo.'">
	<input type="text" name="password" value="'.$cookiepassword.'">
	<input type="submit" name="Envoi">
</form>';
}

?>
