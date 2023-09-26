<h2>La liste des medicaments commandes</h2>
<?php
require 'connexion.php';
$query="SELECT * FROM commande";
$result=mysqli_query($connect, $query);
//$s=mysqli_fetch_array($result);
//print_r($s);


echo "<table border=1>
<tr><th>prénom </th><th>Nom </th><th>numero identite</th><th>numero telephone</th><th>nom du medicament</th><th>prix</th><th>quantite</th><th>prix total</th></tr>";
while($medicament=mysqli_fetch_array($result))
{

echo "<tr><td>".$medicament['prenom']."</td>";
echo "<td>".$medicament['nom']."</td>";
echo "<td>".$medicament['Num_cni']."</td>";
echo "<td>".$medicament['Num_tel']."</td>";
echo "<td>".$medicament['Nom_med']."</td>";
echo "<td>".$medicament['prix']."</td>";
echo "<td>".$medicament['quantite']."</td>";
echo "<td>".$medicament['quantite']*$medicament['prix']."</td></tr>";

   

}
echo "</table>";
//echo "Il y'a $nbp produits";

mysqli_close($connect);
?>
<a href="verificationP.php">retour</a> 
