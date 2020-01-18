<?php  
	$nom=$_POST["nom"];
	$message=$_POST["message"];
	$date= date('Y-m-d H:i:s');
	$connexion=new mysqli("localhost","root","","tp8") or die ("erreur lors du connexion verifier le serveur");
	$req="insert into message values('$nom','$message','$date')";
	$result=$connexion->query($req) or die ("erreur d'insertion");
	

?>