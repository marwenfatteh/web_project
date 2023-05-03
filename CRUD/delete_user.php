<?php
include "connection.php" ;
extract($_POST) ;
$req1=mysqli_query($idcon, "SELECT * FROM CLIENT WHERE(id='$id');") or die(mysqli_error($idcon));
if (mysqli_num_rows($req1)!=0)
{
/*$req2=mysqli_query($idcon,"SELECT * from reservation where (id='$id');") or die(mysqli_error($idcon));
$res=mysqli_fetch_array($req2);
$idvoiture=$res['idvoiture'];
$req3=mysqli_query($idcon,"delete from reservation where (id='$id') and (idvoiture='$idvoiture');") or die(mysqli_error($idcon));*/
$req2=mysqli_query($idcon,"DELETE from reservation where (idclient='$id');") or die(mysqli_error($idcon));
$req=mysqli_query($idcon,"delete from client where(id='$id');")or die(mysqli_error($idcon));
if ($req and $req2)
{
  header("location:deleted_user.html");
}
else
{
  die('no');
}
}
else {
  header("location:deleted_usern.html");
}


?>