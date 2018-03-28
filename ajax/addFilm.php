<?php

session_start();
include('../connect.php');

$num = $_POST['num'];
$titre = $_POST['titre'];
$genre = $_POST['genre'];
$format = $_POST['format'];
$date = $_POST['date'];
$prix = $_POST['prix'];
$etat = $_POST['etat'];
$image = $_POST['image'];
$resume = $_POST['resume'];

$query = $bdd->prepare("INSERT INTO film SET film_num=:num, film_titre=:titre, film_genre=:genre, film_format=:format, film_date=:date, film_prix=:prix, film_etat=:etat, film_image=:image, film_resume=:resume");
$query->execute(array(
'num' => $num,
 'titre' => $titre,
 'genre' => $genre,
 'format' => $format,
 'date' => $date,
 'prix' => $prix,
 'etat' => $etat,
 'image' => $image,
 'resume' => $resume
));

//header('Location: ../admin/view_film.php');
?>








