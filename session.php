<?php 
session_start();
echo 'Les variables sessions ont permis de garder : '.$_SESSION['nom'].'</br>';
echo 'Les variables sessions ont permis de garder : '.$_SESSION['prenom'].'</br>';
echo 'Les variables sessions ont permis de garder : '.$_SESSION['age'].'</br>';
?>