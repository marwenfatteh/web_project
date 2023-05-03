<?php
include "connection.php" ;
extract($_POST) ;
$req=mysqli_query($idcon,"insert into voiture (marque,modele,serie,couleur,chaises,vitesse_max,image_v,disponible,date_v,prix) values ('$marque','$modele','$serie','$coleur','$chaises','$vitesse_max','$image_v','$disp','$date','$prix');")or die(mysqli_error($idcon));;
if ($req)
{
  header("location:added_voiture.html");
}
else
{
    die("no");
}










?>