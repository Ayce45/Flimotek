<?php
function logged_only() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['auth'])) {
        header('Location: admin_index.php');
        exit();
    }
}

logged_only();

include("../connect.php");
session_start();

$user_id = $_REQUEST['username'];
$user_pass = md5($_REQUEST['password']);

echo("SELECT * FROM client WHERE username='$user_id' AND password='$user_pass'");

$run = "SELECT * FROM client WHERE username='$user_id' AND password='$user_pass'";
$table = $bdd->query($run);
$ligne = $table->fetch();
if (!$ligne['username'] == null) {
    $_SESSION['auth'] = $user_id;
    header('Location: ../index.php');
} else {
    header('Location: ../connexion.php');
    ?>
    <script> alert("Nom d'utilisateur inccorect ou Mot de passe incorrect")</script>   
    <?php

}
?>
    