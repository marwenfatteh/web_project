<?php
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$email= $_POST['email'];
$cemail= $_POST['email2'];
$mdp= $_POST['mdp'];
$cmdp= $_POST['mdp2'];
$idcon= mysqli_connect("localhost","root","","project");
//verification de la connexion
if (!$idcon)
 {
    die('Echec de la connexion. Erreur: ' .mysqli_connect_error());
 }
else
  {
      printf("Connexion établie<br><br>");
      

      $req0 = " SELECT email FROM client WHERE (email='$email'); ";
      $res0 = mysqli_query($idcon, $req0);

      if (mysqli_num_rows($res0)!= 0)
      {
         header("location:inscri1.html");
      }
         else
      {
         $req=" INSERT INTO client (nom, prenom, email, cemail, mdp, cmdp) VALUES ('$nom', '$prenom', '$email', '$cemail', '$mdp', '$cmdp'); ";
         $res= mysqli_query ($idcon, $req);
  
          header("location:index.html");
      }
     
  }
  //fermeture de la connexion
  mysqli_close($idcon);
?>