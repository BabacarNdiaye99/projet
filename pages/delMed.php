

<?php
require('connexion.php');
$tour=$_POST['tour'];
//echo $_POST['tour'];
$query="DELETE FROM medicament where nom='$tour'";
$result=mysqli_query($connect,$query);

echo "supression reussi".'<br>'.'<br>';
    echo "<a href='delMed.html'>ici</a> pour supprimer  un nouveau medicament</p>";


?>
<form method="POST" action="update2.php">
    <label for="med">Le nom du médicament :</label>
    <input type="text" name="nom_medicament" id="med" value="<?php echo $medicaments['nom']; ?>" ><br><br>

    <label for="not">notice du medicament:</label>
    <input type="text" name="notice" id="not" value="<?php echo $medicaments['Notice']; ?>"><br><br>

    <label for="qt">Quantite de stock :</label>
    <input type="number" name="quantite" id="qt" value="<?php echo $medicaments['Qte_st']; ?>"><br><br>
    
    <label for="dispo">prix du medicament :</label>
    <input type="number" name="prix" id="dispo" value="<?php echo $medicaments['prix']; ?>"><br><br>



    <input type="submit" name="Soumettre" value="Soumettre">
</form>