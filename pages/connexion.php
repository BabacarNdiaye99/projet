<?php
//1.Connexion a la base de données
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','projet');
$connect= mysqli_connect(HOST,USER, PASS, DB);
if ($connect == false) {
	echo "Erreur de Connexion";
	exit(0);
}
?>