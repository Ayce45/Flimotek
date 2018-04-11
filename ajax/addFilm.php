<?php

session_start();
include('../connect.php');

$target_dir = "../image/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$num = $_POST['num'];
$titre = $_POST['titre'];
$genre = $_POST['genre'];
$format = $_POST['format'];
$date = $_POST['date'];
$prix = $_POST['prix'];
$etat = $_POST['etat'];
$image = $_FILES["file"]["name"];
$resume = $_POST['resume'];

echo ("INSERT INTO film SET film_num=$num, film_titre=$titre, film_genre=$genre, film_format=$format, film_date=$date, film_prix=$prix, film_etat=:$etat, film_image=$image, film_resume=$resume");
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

header('Location: ../admin/view_film.php');
?>








