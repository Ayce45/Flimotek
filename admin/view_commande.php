<?php
include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="box ">
            <div class="info">
                <div class="table-scrol">
                    </br>
                    <h1 align="center">Commandes</h1>
                    </br>

                    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


                        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
                            <thead>
                                <tr>
                                    <th>Nom du film</th>
                                    <th>Date</th>
                                    <th></th>
                                    <th style="width:5%"></th>
                                </tr>
                            </thead>

                            <?php
                            $user_id = $_SESSION['auth'];
                            $reponse = $bdd->query("SELECT * FROM commande");
                            while ($donnees = $reponse->fetch()) {
                                //var_dump($donnees);
                                $film_id = $donnees["film_id"];
                                $reponse1 = $bdd->query("SELECT * FROM FILM WHERE film_num='$film_id' ");
                                while ($donnees1 = $reponse1->fetch()) {
                                    ?>                               
                                    <tr>
                                        <td><?= $donnees["user_id"] ?></td>
                                        <td><?= $donnees1["film_titre"] ?></td>
                                        <td><?= $donnees["commande_date"] ?></td>
                                        <td> <button class="btn btn-danger btn-sm"  onclick="window.location.href = '../ajax/deleteCommande.php?id=<?= $donnees["commande_date"] ?>'" ><i class="fa fa-trash-o"></i></button>	 
                                                <?php
                                            }
                                        }
                                        ?>
                            </tr>
                        </table>
                    </div>
                </div>                   
            </div>
        </div>
    </div>     
</div>

</body>

</html>