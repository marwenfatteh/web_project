<?php
include "connection.php" ;
extract($_POST) ;
$req1=mysqli_query($idcon, "SELECT * FROM voiture WHERE (marque='$marque') and (modele='$modele') and (serie='$serie') ;") or die(mysqli_error($idcon));
if (mysqli_num_rows($req1)!=0)
{
$req=mysqli_query($idcon,"delete from voiture where (marque='$marque') and (modele='$modele') and (serie='$serie') ;") or die(mysqli_error($idcon));
if ($req)
{
  header("location:deleted.html");
}
else
{
  die('no');
}
}
else {
  header("location:deletedn.html");
}







?>















