<?php

session_start();
include("../connect.php");



$film_id = $_REQUEST['film_num'];
$date = date('Y/m/d H:i:s');


if (isset($_REQUEST['user_id'])) {
    $user_id = $_REQUEST['user_id'];
} else {
    
}

if ($_REQUEST['user_id'] == '') {
    header('Location: ../connexion.php');
} else {
    $run = "SELECT * FROM commande WHERE user_id='$user_id' AND  film_id='$film_id'";
    $table = $bdd->query($run);
    $ligne = $table->fetch();
    if ($ligne['user_id'] == null) {
        $run = "INSERT INTO commande VALUES('$user_id',$film_id,'$date')";
        $table = $bdd->query($run);
        header('Location: ../sucess.php');
    } else {
        header('Location: ../index.php');
    }
}
?>
    