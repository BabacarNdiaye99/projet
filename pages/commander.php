<?php
require("connexion.php");
$num = $_GET['nom'];
$query = "SELECT * FROM medicament WHERE Qr_med = $num";
$result = mysqli_query($connect, $query);
$medicaments = mysqli_fetch_array($result);

/*if ($medicaments) {
    echo "Vous avez commandé un médicament dont le nom est : " . $medicaments[1] . "<br>";
    echo "Et le prix est : " . $medicaments[4];
} else {
    echo "Aucun médicament trouvé avec ce numéro.";
}*/
?>

<form method="POST" action="commander2.php">
    <label for="med">Le nom du médicament est :</label>
    <input type="text" name="nom_medicament" id="med" value="<?php echo $medicaments[1]; ?>" readonly><br><br>

    <label for="pr">Le prix du médicament est :</label>
    <input type="text" name="prix_medicament" id="pr" value="<?php echo $medicaments[4]; ?>"readonly><br><br>

    <label for="or">Le numéro du medicamment :</label>
    <input type="number" name="ordre" id="or" value="<?php echo $medicaments[0]; ?>"readonly><br><br>
    
    <label for="dispo">La quantite du medicament disponible :</label>
    <input type="number" name="Qte_dispo" id="dispo" value="<?php echo $medicaments[3]; ?>"readonly><br><br>


    <label for="prenom">Saisir votre prénom :</label>
    <input type="text" name="prenom" id="prenom"><br><br>

    <label for="nom">Saisir votre nom :</label>
    <input type="text" name="nom" id="nom"><br><br>

    <label for="num">Saisir votre numéro de téléphone :</label>
    <input type="text" name="numero" id="num"><br><br>

    <label for="identite">Saisir votre numéro de carte d'identité :</label>
    <input type="text" name="identite" id="identite"><br><br>

    <label for="qte">Saisir la quantité du médicament à commander :</label>
    <input type="number" name="Qte_cde" id="qte"><br><br>

    <input type="submit" name="Soumettre" value="Soumettre">
</form>
