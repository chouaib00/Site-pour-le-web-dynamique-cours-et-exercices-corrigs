<?php 
echo("question 1:<br />");
$tab =array(1,2,3,4);
$somme =0;

for($i=0;$i<sizeof($tab);$i++){
$somme=$somme+$tab[$i];
}
for($i=0;$i<sizeof($tab);$i++){
 echo $tab[$i]."<br />";
}
echo "<br />";
echo "La somme des element du tableau est ".$somme."<br><br>";
echo("<br />question 2 :Somme par utilisation d'une fonction:".somme($tab)."<br> <br>");
// Question 2 par utilisation d'une fonction
 /*function somme($t){
	for ($i=0;$i<sizeof($t);$i++){
	 echo $t[$i]."<br />";
        
}
     
	}
somme($tab);*/

function somme($tableau){
	$somme = 0;
	for($i=0; $i<count($tableau); $i++){
		$somme += $tableau[$i];
	}
	
	return $somme;
}

        
//echo "La somme des element du tableau est ".somme($tab)."<br><br>";

 echo "</br />" ;
 require("ficher_externe_ex3.php");
 echo"Question 3 par utilisation d'un fichier externe:".somme_fichier($tab);
 
 
 

?>