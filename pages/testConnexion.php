<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','test');

$connect=mysqli_connect(HOST,USER,PASS,DB);
var_dump($connect);

if ($connect == true) {
	echo "connexion reussi";
	exit(0);
}
else {
	echo "echec de la connexion";
	exit(0);
}


?>


