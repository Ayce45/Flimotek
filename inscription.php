<?php
include 'connect.php';
?>
<!DOCTYPE HTML>
<html style="background-color:rgb(0, 53, 106)">
    <head>
        <title>LAFLEUR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="LAFLEUR E-COMMERCE" />
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
        <link rel="shortcut icon" href="../images/favicon.ico" type="images/x-icon" />
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="images/favicon.ico" type="images/x-icon" /> 
    </head>
    <body style="background-color:rgb(0, 53, 106)">
        <header>
            <div class="banner">
                <div class="container">
                    <div class="header_bottom">
                        <div class="logo">
                            <h1><a href="./"><span class="m_1">F</span>LIMOTEK</a></h1>
                        </div>
                        <div class="menu">
                            <ul class="megamenu skyblue">	
                                <li><a class="color7" href="inscription.php">Inscription</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="box ">
                    <div class="info">
                        <div class="card">
                            <div class="account-in">
                                <div class="container">
                                    <form method="POST" action="ajax/addAccount.php"> 
                                        <div class="register-top-grid grid_1">
                                            <h1>Inscription</h1>
                                            <div>
                                                <span>Nom<label>*</label></span><input name="nom" type="text"> 
                                            </div>
                                            <div>
                                                <span>Mot de passe<label>*</label></span>
                                                <input name="pass" type="password"> 
                                            </div>
                                            <div>
                                                <span>Confirmation<label>*</label></span>
                                                <input name="confirm" type="password"> 
                                            </div>
                                            <div>
                                                <span>Adresse<label>*</label></span>
                                                <input name="adresse" type="text"> 
                                            </div>
                                            <div>
                                                <span>Tel<label>*</label></span>
                                                <input name="tel" type="text"> 
                                            </div>
                                            <div>
                                                <span>Email<label>*</label></span>
                                                <input name="email" type="text"> 
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>                                       
                                        <div class="clearfix"> </div>
                                        <div class="register-but"> 
                                            <button type="submit" class="btn btn-primary">Valider</button>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </body>
    <div class="copy">
        <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tbody><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/fr/webapps/mpp/paypal-popup" title="PayPal Comment Ca Marche" onclick="javascript:window.open('https://www.paypal.com/fr/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" border="0" alt="PayPal Logo" /></a></td></tr></tbody></table><!-- PayPal Logo -->
        <p class="text-info"> &copy; 2018 FLIMOTEK. All Rights Reserved | Design by MEF</p>
    </div>
</html>		