<?php

include("../connect.php");
$delete_id=$_REQUEST['id'];
$sql="DELETE From commande WHERE commande_date='$delete_id'";//delete query
$req= $bdd-> exec($sql);

echo "<script>window.location.replace('../myCommande.php')</script>";
?>