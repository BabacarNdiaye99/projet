<?php
require("connexion.php");
$nom=$_POST['nom'];
$id=($_POST['code']);
$query="SELECT COUNT(*) FROM pharmacie WHERE ID_P='$id'and nom='$nom'";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_array($result);
//echo $data[0];
if($data[0]==1)
{
    echo '<p> si vous voulez ajouter un medicament tapez <a href="ajouterMed.html">ici</a> pour retourner</p>';
    echo '<p> si vous voulez vérifier la Liste des Médicaments Précommandés tapez <a href="precommander.php">ici</a> pour retourner</p>';
   
    

}
else{
    echo "Vous n'etes pas autorise a connecter en tant que pharmacien".'<br>';
    echo "<a href='Pharmacie.html'>cliquez ici pour retourner</a>";

}



?>