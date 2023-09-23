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
    echo "Vous etes connecter en tant que pharmacien";
    

}
else{
    echo "Vous n'etes pas autorise a connecter en tant que pharmacien".'<br>';
    echo "<a href='Pharmacie.html'>cliquez ici pour retourner</a>";

}



?>