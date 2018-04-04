<?php
require 'connect.php';
?>
<html>

<head>
<title>FLIMOTEK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="FLIMOTEK E-MOVIE" />
<script type="application/x-javascript">
addEventListener("load", function() {
setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
window.scrollTo(0, 1);
}
</script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<link rel="shortcut icon" href="images/favicon.ico" type="images/x-icon" />
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body style="background-color:rgb(0, 53, 106)">
<header>
<div class="banner">
<div class="container">
<div class="header_top">
</div>
<div class="header_bottom">
<div class="logo">
<h1><a href="./"><span class="m_1">F</span>LIMOTEK</a></h1>
</div>
<div class="menu">
<ul class="megamenu skyblue">
  <?php
  if (isset($_SESSION['auth'])) {
  ?>
    <li>
      <a class="color7">
          <?php echo $_SESSION['auth'] ?>
      </a>
    </li>
    <li><a class="color7" href="logout.php">Deconnexion</a></li>
    <li><a class="color7" href="myCommande.php">mes commandes</a></li>

      <?php
  } else {
  ?>
      <li><a class="color7" href="connexion.php">Connexion</a></li>
      <?php
  }
?>

      <li><a class="color7" href="inscription.php">Inscription</a></li>
</ul>
</div>
</div>
</div>
</header>


<div class="container">
<div class="row">
<div class="box ">
<div class="info">
<div class="table-scrol">
</br>
<div class="table-scrol">
  <h1 align="center">Produits</h1>
  <button class="btn btn-sucess" data-target="#createproduct" data-toggle="modal"><i class="fa fa-plus"></i></button>
  <button class="btn btn-sucess" data-target="#uploadimage" data-toggle="modal"><i class="fa fa-image"></i></button>
  </br>
  </br>
  <div class="table-responsive">
    <!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
      <thead>

        <tr>

          <th>Numéro</th>
          <th>Titre</th>
          <th>Genre</th>
          <th>Format</th>
          <th>Date d'achat</th>
          <th>Prix</th>
          <th>Etat</th>
          <th style="width:15%">Image</th>
          <th style="width:5%"></th>
        </tr>
      </thead>


      <?php
      $reponse = $bdd->query("SELECT * FROM film  ");
      while ($donnees = $reponse->fetch()) {
      ?>

        <tr>
          <!--here showing results in the table -->
          <td>
              <?php echo $donnees["film_num"] ?>
          </td>
          <td>
              <?php echo $donnees["film_titre"] ?>
          </td>
          <td>
              <?php echo $donnees["film_genre"] ?>
          </td>
          <td>
              <?php echo $donnees["film_format"] ?>
          </td>
          <td>
              <?php echo $donnees["film_date"] ?>
          </td>
          <td>
              <?php echo $donnees["film_prix"] ?> €</td>
          <td>
              <?php echo $donnees["film_etat"] ?>
          </td>
          <td>
            <a class="color7" target="_blank" href="../image/<?php echo $donnees[" film_image "] ?>">
              <?php echo $donnees["film_image"] ?>
            </a>
          </td>
          <td> <button class="btn btn-danger btn-sm" onclick="window.location.href = 'deleteFilm.php?id=<?php echo $donnees[" film_num "] ?>'" data-toggle="modal"><i class="fa fa-trash-o"></i></button> </td>
        </tr>

          <?php
      } ?>

    </table>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

</html>
