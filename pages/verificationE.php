<?php
require("connexion.php");
$prenom=$_POST['prenom'];
$pass=($_POST['code']);
$query="SELECT COUNT(*) FROM employe WHERE ID_E='$pass'and prenom='$prenom'";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_array($result);
//echo $data[0];
if($data[0]==1)
{

    echo '<p> si vous voulez vérifier la Liste des commandes tapez <a href="allcommande.php">ici</a> pour retourner</p>';
    echo '<p> si vous voulez supprimer un medicament tapez <a href="delMed.html">ici</a> pour retourner</p>';
    echo '<p> si vous voulez modifier des donnees  d\'un medicament tapez <a href="update.html">ici</a> pour retourner</p>';
    

}
else{
    echo "Vous n'etes pas autorises a se connecter comme pharmacien".'<br>';
    echo "<a href='Pharmacie.html'>cliquez ici pour retourner</a>";

}



?>