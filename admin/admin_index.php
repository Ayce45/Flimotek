<?php

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
        <title>FILMOTEK | ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="FLIMOTEK E-COMMERCE" />
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
                        <h1><a href=""><span class="m_1">F</span>LIMOTEK | ADMIN</a></h1>
                    </div>
                    <div class="menu">
                        <ul class="megamenu skyblue">	
                            <li><a class="color7" href="view_film.php">Film</a></li>
                            <li><a class="color7" href="view_client.php">Client</a></li>   
                            <li><a class="color7" href="view_commande.php">Commande</a></li>  
                            <li><a class="color7" href="view_stats.php">Statistique</a></li>  
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="box ">
                        <div class="info">
                            <h4 class="text-center">ADMINISTRATION</h4>
                            </br>
                            <h3 class="text-center">Bienvenue sur l'administration</h3>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p>
                                Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                            </p>
                            <p>
                                Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                            </p>
                            <p>
                                Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                            </p>


                            <button class="btn btn-primary" OnClick="window.location.href = '../'">Retour à l'accueil</button>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div> 
    </body>
</html>