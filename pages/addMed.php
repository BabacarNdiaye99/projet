<?php
//2.Récupération des données de l'utilisateur
require 'connexion.php';

$nom=$_POST['name'];
$notice=$_POST['notice'];
$quantite=$_POST['qte'];
$prix=$_POST['prix'];
//echo $nom.'<br>';
//echo $notice.'<br>';
//echo $quantite.'<br>';
//echo $prix.'<br>';

//print_r($_FILES['photo']);

if ($_FILES['photo']['error'] !=0) {
    echo "Probléme d attachement de l'image";
}
elseif ($_FILES['photo']['size']>=500000) {
    echo "Vous avez dépasser la taille maximale authorisée";
    exit(0);
}
elseif ($_FILES['photo']['type'] !='image/png' && $_FILES['photo']['type'] !='image/jpeg' ) {
    echo "Extension du fichier non authorisé";
}
else{
    $source=$_FILES['photo']['tmp_name'];
    $photo=$_FILES['photo']['name'];
    $location='photos/'.$photo;
    move_uploaded_file($source,$location);
}

$query="INSERT INTO medicament VALUES (null, '$nom', '$notice', $quantite, '$prix', '$photo')";
mysqli_query($connect, $query);
if($query)
{
    echo "insertion reussi";
}else{
    echo "echec d'insertion".mysqli_error($connect);
}
mysqli_close($connect);


?>
<p>Produit insere avec succé, cliquez <a href="ajouterMed.html">ici</a> pour inserer un autre produit</p>