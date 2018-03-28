<?php

include("../connect.php");
$delete_id=$_REQUEST['id'];
$sql="DELETE From client WHERE id=$delete_id";//delete query
$req = $bdd-> exec($sql);
/*if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";
}
*/
echo "<script>window.location.replace('view_client.php')</script>";
?>