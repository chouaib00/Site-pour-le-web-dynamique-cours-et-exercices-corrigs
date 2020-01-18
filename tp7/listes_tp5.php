<?php

function list_modifiable($tab_m,$nom_m){

	$ret='';
 	$ret.="<datalist id='$nom_m'>"; 
	
	for($i=0;$i<sizeof($tab_m);$i++){
				$ret.="<option value='$tab_m[$i]'>";
	}
	$ret.="</datalist>";	
	echo $ret;
	
 }


	
function list_option($tab,$nom){
	
	$ret='';
 	$ret.="<select id='$nom' name='$nom' class='form-control'>"; 

	  for($i=0;$i<sizeof($tab);$i++){
		  $ret.="<option value='".$tab[$i][0]."'>".$tab[$i][1]."</option>";
	  }
	  $ret.="</select>";
  echo $ret;
} 
?>