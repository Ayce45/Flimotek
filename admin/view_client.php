<?php
include '../connect.php';

function logged_only() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if ($_SESSION['auth'] != "admin") {
        header('Location: index.php');
        exit();
    }    
}

logged_only();
?>
<!DOCTYPE HTML>
<html style="background-color:rgb(0, 53, 106)" >
    <head>
        <title>FLIMOTEK | ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="LAFLEUR E-COMMERCE" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Custom Theme files -->
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--webfont-->
        <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src=".   ./js/jquery-1.11.1.min.js"></script>
        <!-- start menu -->
        <link href="../css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <script src="../js/jquery.easydropdown.js"></script>
        <link rel="shortcut icon" href="../images/favicon.ico" type="images/x-icon" />
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="../images/favicon.ico" type="images/x-icon" /> 
    </head>
    
    <body>
        <div class="banner2">
            <div class="container">   
                <div class="header_top">
                    <div class="header_top_left">
                        <form action="logout.php">
                            <button type="submit" class="btn btn-default btn-sm">
                                <span class="fas fa-sign-out-alt"></span> Déconnexion
                            </button>
                        </form>
                    </div>
                </div>
                <div class="header_bottom">
                    <div class="logo">
                        <h1><a href="./"><span class="m_1">F</span>LIMOTEK | ADMIN</a></h1>
                    </div>
                    <div class="menu">
                        <ul class="megamenu skyblue">	
                            <li><a class="color7" href="view_film.php">Film</a></li>
                            <li><a class="color7" href="view_client.php">Client</a></li>   
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="box ">
                        <div class="info">
                            <div class="table-scrol">
                                </br>
                                <div class="table-scrol">
                                    <h1 align="center">Client</h1>
                                    </br>
                                    </br>
                                    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


                                        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
                                            <thead>
                                                <tr>

                                                    <th>Numéro</th>
                                                    <th>Nom</th>
                                                    <th>Adresse</th>
                                                    <th>Téléphone</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <?php
                                            $reponse = $bdd->query("SELECT * FROM client");
                                            while ($donnees = $reponse->fetch()) {
                                                ?>

                                                <tr>
                                                    <!--here showing results in the table -->
                                                    <td><?= $donnees["id"] ?></td>
                                                    <td><?= $donnees["username"] ?></td>
                                                    <td><?= $donnees["adresse"] ?></td>
                                                    <td><?= $donnees["tel"] ?></td>
                                                    <td><?= $donnees["email"] ?></td>
                                                    <td> <button class="btn btn-danger btn-sm"  onclick="window.location.href='deleteAccount.php?id=<?= $donnees["id"] ?>'" data-toggle="modal"><i class="fa fa-trash-o"></i></button>	  </td>
                                                </tr>

                                            <?php } ?>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
    </body>

</html>
