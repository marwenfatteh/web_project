<?php
include "connection.php" ;
extract($_POST) ;
$res=mysqli_query($idcon,"select disponible from voiture where (marque='$marque')and(modele='$modele') and (serie='$serie');") or die (mysqli_error($idcon));
$res1=mysqli_query($idcon,"select id from voiture where (marque='$marque')and(modele='$modele') and (serie='$serie'); ") or die(mysqli_query($idscon));
$res2=mysqli_query($idcon,"select id from client where (nom='$nom') and (prenom='$prenom'); ") or die(mysqli_query($idscon));
$t0=mysqli_fetch_array($res);
$t=mysqli_fetch_array($res1);
$t1=mysqli_fetch_array($res2);
$dispo=$t0['disponible'];
$idvoiture=$t['id'];
$idclient=$t1['id'] ;

if (($dispo=="o") or ($dispo=="O"))
{
    $res4=mysqli_query($idcon,"update voiture set disponible='N' where (marque='$marque')and(modele='$modele') and (serie='$serie');") or die (mysqli_error($idcon));
    $res3=mysqli_query($idcon,"insert into reservation values('$idclient','$idvoiture','$nom','$prenom','N','$dated','$datef');"); 
    header("location:reservation1.html");
}
else
{
    header("location:reservation2.html");
}

?>