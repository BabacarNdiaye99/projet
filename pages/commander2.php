<?php
require("connexion.php");
$med= $_POST['nom_medicament'];
$prix= $_POST['prix_medicament'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$num=$_POST['numero'];
$id=$_POST['identite'];
$quantite=$_POST['Qte_cde'];
$disponible=$_POST['Qte_dispo'];
if($quantite<$disponible){
    //echo $med.'<br>';
//echo $prix.'<br>';
//echo $prenom.'<br>';
//echo $nom.'<br>';
//echo $num.'<br>';
//echo $id.'<br>';
//echo $quantite.'<br>';
$query="INSERT INTO commande(prenom,nom,Num_cni,Num_tel,Nom_med,prix,quantite) values('$prenom','$nom','$id',$num,'$med',$prix,$quantite)";
$result=mysqli_query($connect,$query);
echo '<p> votre demande est bien prise en compte <a href="allMed.php">ici</a> pour retourner</p>';


}
else{
    echo "choisis une quantite inferieur a la quantite disponible";
    echo "<a href='allMed.php'>Retour</a>";
}
?>

