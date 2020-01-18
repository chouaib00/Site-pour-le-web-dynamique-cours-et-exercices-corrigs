<html>
    <head>
        <?
        require"procedures.php";
        ?>
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
      <?php require("procedures.php"); 
    require("produits.php");
        //appel de la procédure qui remplit une liste à partir d'un tableau
        REMPLIR($produits, "list1");
        ?>
    </select>
    <input type="submit" value="envoyer" name ="sb">
   
   </form>
    </body>
</html>