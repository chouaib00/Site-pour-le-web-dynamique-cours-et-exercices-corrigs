<?php
function REMPLIR($produits, $nom_liste)
{
    $n=count($produits);


//pour chaque case du tableau , crée une option dans la liste
    for($i=0; $i<$n; $i++)
    {
    $val=$produits[$i];?>
    <option value="<?php echo $val?>"> <?php echo $val ?></option>
    <?php
}?>

<?php
}
?>
    
