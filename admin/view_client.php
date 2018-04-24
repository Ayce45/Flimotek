<?php
include 'header.php';
?>
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
                                        <th style="width:5%"></th>
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
                                        <td> <button class="btn btn-danger btn-sm"  onclick="window.location.href = 'deleteAccount.php?id=<?= $donnees["id"] ?>'" data-toggle="modal"><i class="fa fa-trash-o"></i></button>	  </td>
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
