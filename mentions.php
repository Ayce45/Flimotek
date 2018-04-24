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
                        <center>

                        <h1>MENTIONS LEGALES :</h1>
                        <p>
                           

                        <h3>1. Présentation du site : <br></h3>

                            Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissan<br>

                            Informations légales :<br>

                            Statut du propriétaire : societe<br>
                            Préfixe : sarl<br>
                            Nom de la Société : filmotek<br>
                            Adresse : saint paul bourdon blanc 45000 orleans<br>
                            Tél  : 0102030405<br>
                            Au Capital de : 50000 €<br>
                            SIRET :  123456   R.C.S. : ghjh<br>
                            Numéro TVA intracommunautaire : 1234<br>
                            Adresse de courrier électronique : flimotek@gmauil.com <br>

                            Le Créateur du site est : fatime<br>
                            Le Responsable de la  publication est : abdel fatime<br>
                            Contactez le responsable de la publication : fatime@gmail.com<br>
                            Le responsable de la publication est une personne <br>

                            Le Webmaster est  : evan<br>
                            Contactez le Webmaster : evan@gmail.com<br>
                            L’hebergeur du site est : flimotek saint paul 45000 orleans<br>
                            CREDITS : les mentions légales ont étés générées par générer des mentions légales<br>
                            Personnalisez votre Panneau A vendre personnalisé<br><br>



                        <h3> 2. Description des services fournis :<br></h3>

                            Le site www.filmotek.com a pour objet de fournir une information concernant l’ensemble des activités de la société.<br>
                            Le proprietaire du site s’efforce de fournir sur le site www.filmotek.com des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tie<br><br>


                             <h3>3. Propriété intellectuelle et contrefaçons :<br> </h3>


                            Le proprietaire du site est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels…<br>
                            Toute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable à l'email : evan@gmail.com .<br>
                            Toute exploitation non autorisée du site ou de l’un quelconque de ces éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie <br><br>


                             <h3>4. Liens hypertextes et cookies :<br> </h3>

                            Le site www.filmotek.com contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de le proprietaire du <br>

                            L’utilisateur est informé que lors de ses visites sur le site www.filmotek.com, un ou des cookies sont susceptible de s’installer automatiquement sur son ordinateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.<br>

                            Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de refuser de la manière décrite à l’adresse suivante : www.cnil.fr<br>
                            Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :<br>
                            Sous Internet Explorer : onglet outil / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.<br>
                            Sous Netscape : onglet édition / préférences. Cliquez sur Avancées et choisissez Désactiver les cookies. Validez sur Ok.<br><br>


                             <h3>5. Protection des biens et des personnes - gestion des données personnelles :<br> </h3>

                            Utilisateur : Internaute se connectant, utilisant le site susnommé : www.filmotek.com<br>
                            En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.

                            Sur le site www.filmotek.com, le proprietaire du site ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site www.filmotek.com. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site www.filmotek.com l’obligation ou non de fournir ces informations.<br>
                            Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à www.filmotek.com par email : email du webmaster ou  en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.<br>

                            Aucune information personnelle de l'utilisateur du site www.filmotek.com n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site www.filmotek.com à le proprietaire du site et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site www.filmotek.com.<br>
                            Le site www.filmotek.com est déclaré à la CNIL sous le numéro 123 456 789.

                            Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1<br>
                        </center>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>