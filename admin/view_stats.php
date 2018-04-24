<?php
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<div class="container">
    <div class="row">
        <div class="box ">
            <div class="info">
                <h1 align="center">STATISTIQUES</h1>
                <?php
                $reponse = $bdd->query('SELECT count(user_id) AS nbEmprunt FROM commande');
                $donnees = $reponse->fetch();
                $re = $bdd->query('SELECT count(user_id) AS nbEmpruntNR FROM commande ');
                $do = $re->fetch();

                $rep = $bdd->query('SELECT count(film_num) AS nbFilm FROM film');
                $dons = $rep->fetch();

                $repp = $bdd->query('SELECT count(id) AS nbClient FROM client');
                $donn = $repp->fetch();
                $r = $bdd->query('SELECT count(id) AS nbClientA FROM client');
                $d = $r->fetch();

                $_SESSION['nbE'] = $donnees['nbEmprunt'];
                $_SESSION['nbENR'] = $do['nbEmpruntNR'];
                $_SESSION['nbC'] = $donn['nbClient'];
                $_SESSION['nbCA'] = $d['nbClientA'];
                $_SESSION['nbFf'] = $dons['nbFilm'];
                ?>   

                <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                <script type="text/javascript">
                    var nbEmprunt = <?php echo $_SESSION['nbE']; ?>;
                    var nbClient = <?php echo $_SESSION['nbC']; ?>;
                    var nbF = <?php echo $_SESSION['nbFf']; ?>;
                    google.load("visualization", "1", {packages: ["corechart"]});
                    google.setOnLoadCallback(drawChart);
                    function drawChart() {
                        // Chart 1
                        var data = google.visualization.arrayToDataTable([['Films', 'Stats'], ["Nombre d'emprunt", nbEmprunt], ["Nombre de client", nbClient], ["Nombre de films", nbF]]);
                        var options = {

                        };
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    }
                </script>
                <div id="piechart" style="width: 100%; height: 500px;">&nbsp;</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>