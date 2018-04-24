<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>FLIMOTEK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="FLIMOTEK E-MOVIE" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
                                    <li><a class="color7" ><?= $_SESSION['auth'] ?></a></li>
                                    <li><a class="color7" href="logout.php">Deconnexion</a></li>
                                    <li><a class="color7" href="myCommande.php">mes commandes</a></li>

                                    <?php
                                } else {
                                    ?>
                                    <li><a class = "color7" href = "connexion.php">Connexion</a></li>
                                    <?php
                                }
                                ?>

                                <li><a class="color7" href="inscription.php">Inscription</a></li>
                                <li><a class="color7" href="mentions.php">mentions legales</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="box ">
                    <div class="info">
                        <div class="card">
                            <br>
                            <div class="card-header bg-dark text-light">
                                <div class="clearfix"></div>
                            </div>
                            <?php
                            $reponse = $bdd->query("SELECT * FROM film");
                            while ($donnees = $reponse->fetch()) {
                                ?>
                                <form method="POST" action="ajax/addCommande.php">
                                    <div class="container text-center">
                                        <div class="col-xs-2 col-md-2">
                                            <img class="img-responsive" src="image/<?= $donnees["film_image"] ?>" alt="prewiew">
                                        </div>
                                        <div class="col-xs-4 col-md-2">
                                            <h4 class="product-name"><strong><?= $donnees["film_titre"] ?></strong></h4><h4><small><?= $donnees["film_format"] ?></small></h4>
                                            <h4><small><?= $donnees["film_genre"] ?></small></h4>
                                            <h4><small><?= $donnees["film_prix"] ?> €</small></h4>
                                            <h4><small><?= $donnees["film_etat"] ?></small></h4>
                                            <?php
                                            if (isset($_SESSION['auth'])) {
                                                ?><input class="hidden" name="user_id" value="<?= $_SESSION['auth'] ?>">
                                                <?php
                                            }
                                            ?>
                                            <input class="hidden" name="film_num" value="<?= $donnees["film_num"] ?>">
                                        </div>
                                        <div class="col-xs-6 col-md-6 row">
                                            <p><?= $donnees["film_resume"] ?></p>
                                            <div class="col-xs-6 col-md-8 col-xs-pull-5 ">
                                                <div class="col-md-5">
                                                    <button type="submit" class="btn btn-primary">COMMANDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </br>
                                </br>
                                </br>
                                </br>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>


