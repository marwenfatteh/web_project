<?php
$idcon= mysqli_connect("localhost","root","","project");
//verification de la connexion
if (!$idcon)
 {
    die('Echec de la connexion. Erreur: ' .mysqli_connect_error());
 }
 ?>