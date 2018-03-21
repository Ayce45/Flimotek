<?php
include("connect.php");
session_start();

$user_id = $_REQUEST['username'];
$user_pass = md5($_REQUEST['password']);

$run = "SELECT * FROM admin WHERE username='$user_id' AND password='$user_pass'";
$table = $bdd->query($run);
$ligne = $table->fetch();
if (!$ligne['username'] == null) {
    $_SESSION['auth'] = $user_id;
    header('Location: admin_index.php');
    } else {
    echo "Non"; 
}
?>
    