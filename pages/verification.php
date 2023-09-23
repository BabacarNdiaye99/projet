<?php
require("connexion.php");
$login=$_POST['login'];
$pass=($_POST['passwd']);
$query="SELECT COUNT(*) FROM users WHERE login='$login'and password='$pass'";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_array($result);
//echo $data[0];
if($data[0]==1)
{
    header('Location: allMed.php');
    

}
else{
    echo "l'utilisateur non authentifie".'<br>';
    echo "<a href='addusers.html'>cliquez ici pour inscrire</a>";

}



?>