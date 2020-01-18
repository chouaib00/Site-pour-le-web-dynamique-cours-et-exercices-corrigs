<!DOCTYPE html>
<html>
<head>
<title>Formulaire de saisie des
items</title>
</head>
<body>
<form action="nb_prod.php" method="POST">
<label for="liste">Choisissez des items:</label>
<select name="list" id="liste">
<option value="M. Bennani">M. Bennani</option>
<option value="M. Mansouri">M. Mansouri</option>
<option value="M. Benjaloune">M. Benjaloune</option>
<option value="M. saidi">M. saidi</option>
</select>
<label> Quantite des produits</label><input type="text" name="text">

    <select name="list1" id="liste">
      <?php 
        include("produits.php");
        foreach($produits as $val )
    echo "<option>".$val."</option>";
        ?>
    </select>
    <input type="submit" value="envoyer" name ="sb">
        
</form>
</body>
</html>