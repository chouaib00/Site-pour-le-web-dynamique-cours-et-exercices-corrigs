<html>
<head>
<title> Conversion </title>
<style>
.tb{
border-width:1px ;
border-style : solid ;
border-color : red;

}
tr{
border-style:solid;
border-color : red;
}


td{
border-style:solid;
border-color : red;
}
</style>
</head>
<body>
<?php 
$tab=array(11,22,33,44);
function convertir($t){
		return"".$t/11;
	
}
function somme($tab){
	$var = 0 ;
	for($i=0;$i<sizeof($tab);$i++){
		$var=$var+convertir($tab[$i]);
	
	}
	return $var;

}
?>
<center>
<center><br><b>Exercise 4:</b></center><br>
<table class ="tb">
	<tr>
	<td>Indice</td><td> Montant en DHS</td><td> Montant en Euro</td>
	</tr>
	<?php 
	for($i=0;$i<sizeof($tab);$i++){
	echo"<tr> 
	<td>".$i."</td><td>".$tab[$i]."</td><td>".convertir($tab[$i])."</td>
	</tr>";
	}
	echo"</table><table class = tb>";
	echo"<tr><td>la somme des valeur en euro est :".somme($tab)."</td></tr>";
	?> 
	</table>
	</center>
</body>
</html>