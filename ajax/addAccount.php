<?php

session_start();
include('../connect.php');

$i = 0;
$user = $_POST['username'];
$pass = md5($_POST['pass']);
$confirm = md5($_POST['confirm']);
$adresse = $_POST['adresse'];
$tel = $_POST['tel'];
$email = $_POST['email'];

//Vérification du mdp
if ($pass != $confirm || empty($confirm) || empty($pass)) {
    $mdp_erreur = "Votre mot de passe et votre confirmation diffèrent, ou sont vides";
    $i++;
}

if ($i == 0) {
    $query = $bdd->prepare("INSERT INTO client SET username='$user', adresse='$adresse', tel='$tel', email='$email', password='$pass'");
    $query->execute();
    //header('Location: ../sucessR.php');
}
?>








