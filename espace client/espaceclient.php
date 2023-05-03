<?php
include "connection.php" ;
extract($_POST) ;
$req = " SELECT * FROM client WHERE (email='$email') and (mdp='$mdp'); ";
$res = mysqli_query($idcon, $req);
if (mysqli_num_rows($res)!=0)
{
    $req=" INSERT INTO espacec (nom,prenom, email, mdp, numtel, ville, msg) VALUES ('$nom','$prenom', '$email', '$mdp', '$numtel', '$ville', '$msg'); ";
    $res= mysqli_query ($idcon, $req) or die(mysqli_error($idcon)) ;
    header("location:Espaceclient1.html");
}
else
{
    header("location:Espaceclient2.html");
}
?>

