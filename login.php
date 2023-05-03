<?php
include "connection/connection.php" ;
extract($_POST) ;
$req = " SELECT * FROM client WHERE (email='$email') and (mdp='$mdp'); ";
$res = mysqli_query($idcon, $req);
if (mysqli_num_rows($res)!=0)
{
    header("location:voiture.html");
}
else
{
    header("location:incorrect.html");
}
?>