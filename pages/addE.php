<?php
require("connexion.php");
/*echo $_POST["nom"].'<br>';
echo $_POST['prenom'].'<br>';
print_r($_FILES['image']);*/
$noms=$_POST["nom"];
$prenoms=$_POST['prenom'];
$photo=$_FILES['image']['name'];
$upload="photo/".$photo;
move_uploaded_file($_FILES['image']['tmp_name'],$upload);
$query="INSERT INTO gestion VALUES(null,'$noms','$prenoms','$photo')";
if(mysqli_query($connect,$query))
{
    echo "image est ajoutee avec succee";
}else{
    echo "eurreur d'ajout";
}
mysqli_close($connect);


?>