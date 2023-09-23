<?php
require("connexion.php");
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$tel=$_POST['numero'];
$carte=$_POST['identite'];
$nomMed=$_POST['nomMed'];
$quantite=$_POST['Qte_cde'];
//echo $prenom.'<br>';
//echo $nom.'<br>';
//echo $tel.'<br>';
//echo $carte.'<br>';
//echo $nomMed.'<br>';
//echo $quantite.'<br>';
$query="INSERT INTO demander(Num_clt,prenom_clt,nom_clt,phone_clt,Num_cni,Nom_Med,Qt_med) VALUES(NULL,'$prenom','$nom',$tel,'$carte','$nomMed',$quantite)";
$result=mysqli_query($connect,$query);


?>
<p> votre demande est bien prise en compte cliquez <a href="allMed.php">ici</a> pour retourner</p>