<h2>Tous les medicaments</h2>
<?php
require 'connexion.php';
$query="SELECT * FROM medicament";
$result=mysqli_query($connect, $query);
//$s=mysqli_fetch_array($result);

$nbp=mysqli_num_rows($result);

echo "<table border=1>
<tr><th>Numéro</th><th>Nom</th><th>Notice</th><th>Quantite stock</th><th>Prix</th><th>images</th><th>commander</th>";
while($medicament=mysqli_fetch_array($result))
{

echo "<tr><td>".$medicament['Qr_med']."</td>";
echo "<td>".$medicament['nom']."</td>";
echo "<td>".$medicament['Notice']."</td>";
echo "<td>".$medicament['Qte_st']."</td>";
echo "<td>".$medicament['prix']."</td>";
if($medicament['nom']=='doliprane')
{
    echo "<td> <img src='photos/doliprane.png' width=50px > </td>";
}elseif($medicament['nom']=='paracetamol')
{
    echo "<td> <img src='photos/doliprane.png' width=50px > </td>";
}

    
    echo "<td><a href='commander.php?nom=$medicament[0]'>commander </a></td></tr>";
   

}
echo "</table>";
//echo "Il y'a $nbp produits";

mysqli_close($connect);
?>
<p> pour reserver une commande cliquez<a href="demand.html">ici</a> </p>
