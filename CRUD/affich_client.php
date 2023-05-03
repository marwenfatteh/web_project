<?php
include "connection.php";
extract($_POST);
$req="select * from reservation";
$res=mysqli_query($idcon,$req) or die (mysqli_error($idcon)) ;
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
    
        
        <meta charset="UTF-8">
        <title>Les clients</title>
        <link rel="stylesheet" href="styleclientt.css">
       
    </head>
    <body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"><a href="index.html">TunCar</a></h2>
            </div>
            <div class="menu">
                <ul>
                <center> <li><a href="add_voiture.html">ADD VOITURES</a></li></center>
                     <center> <li><a href="update_voiture.html">UPDATE VOITURE</a></li></center>
                     <center> <li><a href="delete.html">SUPPRIMER VOITURE</a></li></center>
                     <center><li><a href="affich_client.php">AFFICHER CLIENT</a></li></center>
                     <center> <li><a href="delete_user.html">SUPPRIMER CLIENT</a></li></center>
                
            
                </ul>
            </div>
            
        </div>
</div>
        <div class="a1">
            

<div class="voituree">
<?php
while($t=mysqli_fetch_array($res)){
    $idv=$t['idvoiture'];
    $req="select marque,modele,serie from voiture where (id='$idv');" ;
    $res1=mysqli_query($idcon,$req) or die (mysqli_error($idcon));
    $t1=mysqli_fetch_array($res1) ;

?>
                <table bordure='1' >
                <tr>
                <th> Nom </th>
                <th> Prenom</th>
                <th> Date de debut</th>
                <th> Date de fin</th>
                <th> Marque voiture</th>
                <th> Modele voiture</th>
                <th> Serie voiture</th>
                </tr>
          
                <tr>
                 <td> <?php echo($t['nom']) ?> </td>
                 <td> <?php echo($t['prenom'])?></td>
                 <td> <?php echo($t['dateD']) ?></td>
                 <td> <?php echo($t['dateF']) ?></td>
                 <td> <?php echo($t1['marque']) ?></td>
                 <td> <?php echo($t1['modele']) ?></td>
                 <td> <?php echo($t1['serie']) ?></td>
                </tr>

               
                
            </table>
            </div>
            <?php
}
            ?>
            </div>
</body>
</html>
