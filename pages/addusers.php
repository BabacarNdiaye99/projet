<?php
require("connexion.php");
$log=$_POST['log'];
$password=$_POST['pas'];
$query="INSERT INTO users VALUES('$log','$password')";
mysqli_query($connect,$query);
mysqli_close($connect);
?>
<p> utilisateur est insere avec succe,cliquez <a href="inscription.html">ici</a> </p>