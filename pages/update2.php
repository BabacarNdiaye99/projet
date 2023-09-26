
<?php
require('connexion.php');
$numero=$_POST['numero'];
$nom=$_POST['nom_medicament'];
$not=$_POST['notice'];
$quantite=$_POST['quantite'];
$prix=$_POST['prix'];


$query="UPDATE medicament
SET nom= '$nom',
    Notice= '$not',
    Qte_st='$quantite',
    prix='$prix'
WHERE Qr_med=$numero";
$result=mysqli_query($connect,$query);
mysqli_close($connect);
?>
<p> les modifications sont bien enregistres  </p>

