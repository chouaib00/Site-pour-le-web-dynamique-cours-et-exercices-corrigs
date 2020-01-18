<?php 
function somme_fichier($tableau){
	$somme = 0;
	for($i=0; $i<count($tableau); $i++){
		$somme += $tableau[$i];
	}
	
	return $somme;
}
?>