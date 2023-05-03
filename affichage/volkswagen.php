<?php
include "connection.php" ;
$res=mysqli_query($idcon,"select * from voiture where(marque='volkswagen');") or die(mysqli_error($idcon));


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Audi</title>
        <link rel="stylesheet" href="stylevoiture.css">
       
    </head>
    <body>
        <header>
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo"><a href="index.html">TunCar</a></h2>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.html">ACCEUIL</a></li>
                        <li><a href="voiture.html">VOITURES</a></li>
                        <li><a href="agence.html">AGENCES</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="Espaceclient.html">ESPACE CLIENT</a></li>
                        <li><a href="Espaceadmin.html">ADMIN</a></li>
                    </ul>
                </div>
                <div class="search">
                    <input class ="srch" type="search" name="" placeholder="Tapez..">
                    <a href="#"> <button class="btn">Rechercher</button></a>
                </div>
            </div>
        </div>
            </header>
<?php
while ($t=mysqli_fetch_array($res)){
?>
            <div class="voituree">
            <table id="table_carac">
                <tr>
                 <td><?php echo "<img height='250px' width='100%' src='voiture/volkswagen/".$t['image_v']."' />"; ?></td>
                 <th>Marque &nbsp:</th>
                 <th> <?php echo($t['marque']) ?></th>
                 <th> &nbsp &nbsp &nbspModele:</th>
                 <th> <?php echo($t['modele']) ?></th>
                 <th> &nbsp &nbsp &nbspSerie:</th><th> <?php echo($t['serie']) ?></th>
                 <th> &nbsp &nbsp &nbspCouleur:</th>  <th> <?php echo($t['couleur']) ?></th>
                 <th> &nbsp &nbsp &nbspNombre de chaise:</th><th> <?php echo($t['chaises']) ?></th>
                 <th> &nbsp &nbsp &nbspVitesse_max:</th> <th> <?php echo($t['vitesse_max']) ?></th>
                 <th> &nbsp &nbsp &nbspDisponibilité:</th><th> <?php echo($t['disponible']) ?></th>
                 <th> &nbsp &nbsp &nbspPrix:</th> <th> <?php echo($t['prix']) ?></th>
                 <td><a href="reservation.html"><input class="btn" type="button" value="Commandez" /></a></td>
                </tr>

            </table>
            <?php
}
            ?>
            </div>
            <footer>
                <h2 id="contact">Contactez-nous</h2>
                <form class="contact">
                  <input placeholder="Nom">
                  <input placeholder="E-mail">
                  <textarea placeholder="Votre message ici..."></textarea>
                  <button>Envoyer</button>
                </form>
                <div id="deuxiemeTrait"></div>
                <div id="copyrightEtIcons">
                  <div id="copyright">
                  <h1> Copyright <span>©2021</span>By <span>Akrem&Chaima</span>. All Rights Reserved</h1>
                  </div>
                  <div id="icons">
                    <a href="http://www.twitter.fr"><i class="fa fa-twitter"></i></a>
                    <a href="http://www.facebook.fr"><i class="fa fa-facebook"></i></a>
                    <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
          
                  </div>
                </div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
              </footer>
        </body>
</html>