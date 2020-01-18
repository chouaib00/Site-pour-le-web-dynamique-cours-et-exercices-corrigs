<?php 
	$connexion=new mysqli("localhost","root","","tp8");
	$req="select * from message";
	$result=$connexion->query($req);
	while($donn =$result->fetch_assoc()){
	echo "<div id=\"msg\"> <span id=\"par_nom\">".$donn["nom"]."</span>:".$donn["message"];
	echo" <p>".$donn["date"]." </p>";
	echo "</div>";
	}

?>