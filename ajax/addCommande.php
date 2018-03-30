<?php

session_start();
include("../connect.php");



$film_id = $_REQUEST['film_num'];
$date = date('Y/m/d H:i:s');


if (isset($_REQUEST['user_id'])) {    
    $user_id = $_REQUEST['user_id'];
}
else {
    header('Location: ../connexion.php');
}   

//echo("INSERT INTO commande VALUES('$user_id',$film_id,'$date')");

$run = "INSERT INTO commande VALUES('$user_id',$film_id,'$date')";
$table = $bdd->query($run);

header('Location: ../sucess.php');
?>
    