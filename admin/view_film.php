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
                        <h1 align="center">Produits</h1>
                        <button class="btn btn-sucess" data-target="#createproduct" data-toggle="modal" ><i class="fa fa-plus"></i></button>
                        </br>
                        </br>
                        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


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
                                        <td><?= $donnees["film_num"] ?></td>
                                        <td><?= $donnees["film_titre"] ?></td>
                                        <td><?= $donnees["film_genre"] ?></td>
                                        <td><?= $donnees["film_format"] ?></td>
                                        <td><?= $donnees["film_date"] ?></td>
                                        <td><?= $donnees["film_prix"] ?> €</td>
                                        <td><?= $donnees["film_etat"] ?></td>
                                        <td><a class="color7" target="_blank" href="../image/<?= $donnees["film_image"] ?>"><?= $donnees["film_image"] ?></a></td>
                                        <td> <button class="btn btn-danger btn-sm"  onclick="window.location.href = 'deleteFilm.php?id=<?= $donnees["film_num"] ?>'" data-toggle="modal"><i class="fa fa-trash-o"></i></button>	  </td>
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
</div>

<div class="modal" tabindex="1" role="dialog" id="createproduct">      
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="../ajax/addFilm.php">
                <div class="modal-header">
                    <h5 class="modal-title text-center">⚠ CREATION FILM ⚠</h5>
                </div>
                <div class="modal-body">
                    <div>
                        <span>Numéro*         <label></label></span>
                        <input name="num" type="text"> 
                    </div>
                    <div>
                        <span>Titre*<label></label></span>
                        <input name="titre" type="text"> 
                    </div>
                    <div>
                        <span>Genre*<label></label></span>
                        <input name="genre" type="text"> 
                    </div>
                    <div>
                        <span>Format*     <label></label></span>
                        <input name="format" type="text"> 
                    </div>
                    <div>
                        <span>Date d'achat*         <label></label></span>
                        <input name="date" type="text"> 
                    </div>
                    <div>
                        <span>Prix*         <label></label></span>
                        <input name="prix" type="text"> 
                    </div>
                    <div>
                        <span>Etat*         <label></label></span>
                        <input name="etat" type="text"> 
                    </div>
                    <div>
                        <span>Image*         </span>                     
                        <input name="file" type="file" style="display: initial;" required>                                                 
                    </div>
                    <div>
                        <span>Résumé*         <label></label></span>
                        <input name="resume" type="text"> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Oui</button>                    
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Non</button>
                </div>
            </form>
        </div>
    </div>
</div>  
</body>
</html>

