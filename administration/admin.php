<?php
include "connection.php";
extract($_POST) ;
$email=$_POST["email"] ;
$mdp=$_POST['mdp'] ;
if ($email=="admin@email.com" and $mdp=="adminadmin")
{
    header("location:controleur.html");
}
else
header("location:Espaceadmin.html");

?>