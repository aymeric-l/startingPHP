<?php 
session_start();
echo 'Les variables sessions ont permis de garder : '.$_SESSION['nom'].'</br>';
echo 'Les variables sessions ont permis de garder : '.$_SESSION['prenom'].'</br>';
echo 'Les variables sessions ont permis de garder : '.$_SESSION['age'].'</br>';

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

setcookie("pseudo", $pseudo, time()+3600);
setcookie("password", $password, time()+3600);


?>