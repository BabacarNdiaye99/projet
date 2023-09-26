
<?php
require('connexion.php');
$nom=$_POST['nom'];
//echo $_POST['nom'];
$query="SELECT * FROM medicament";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_array($result);
//print_r($data);

//echo "supression reussi".'<br>'.'<br>';
    //echo "<a href='delMed.html'>ici</a> pour supprimer  un nouveau medicament</p>";
?>

<form method="POST" action="update2.php">
    <label for="num">Le numero du médicament :</label>
    <input type="number" name="numero" id="num" value="<?php echo $data['Qr_med']; ?>" readonly ><br><br>
    <label for="med">Le nom du médicament :</label>
    <input type="text" name="nom_medicament" id="med" value="<?php echo $data['nom']; ?>" ><br><br>

    <label for="not">notice du medicament:</label>
    <input type="text" name="notice" id="not" value="<?php echo $data['Notice']; ?>"><br><br>

    <label for="qt">Quantite de stock :</label>
    <input type="number" name="quantite" id="qt" value="<?php echo $data['Qte_st']; ?>"><br><br>
    
    <label for="dispo">prix du medicament :</label>
    <input type="number" name="prix" id="dispo" value="<?php echo $data['prix']; ?>"><br><br>



    <input type="submit" name="Soumettre" value="Soumettre">
</form>