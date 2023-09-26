<h2>Tous les medicaments précommandes</h2>
<?php
require 'connexion.php';
$query="SELECT * FROM demande";
$result=mysqli_query($connect, $query);
//$s=mysqli_fetch_array($result);
//print_r($s);


echo "<table border=1>
<tr><th>prénom du client</th><th>Nom du client</th><th>numero telephone</th><th>numero identite</th><th>nom du medicament commande</th><th>quantite commande</th></tr>";
while($medicament=mysqli_fetch_array($result))
{

echo "<tr><td>".$medicament['prenom_clt']."</td>";
echo "<td>".$medicament['nom_clt']."</td>";
echo "<td>".$medicament['phone_clt']."</td>";
echo "<td>".$medicament['Num_cni']."</td>";
echo "<td>".$medicament['Nom_Med']."</td>";
echo "<td>".$medicament['Qt_med']."</td>";

   

}
echo "</table>";
//echo "Il y'a $nbp produits";

mysqli_close($connect);
?>
<a href="verificationP.php">retour</a> 
