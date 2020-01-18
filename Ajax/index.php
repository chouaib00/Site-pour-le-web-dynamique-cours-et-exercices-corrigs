<html>
<head>
	<title>Livre d'or</title>
	<meta charset="utf-8">
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<script  type ="text/javascript" src="interface.js"></script>
    <script src="bootstrap.min.js"> </script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
	</script>
    <style>
        h1{
            color: orange
        }
    </style>
</head>
<body>

<center>
    <h1 > Livre D'or</h1>
    <img src="gast033.gif" >
<div id="feed">
</div>
<div class="def">
<form method="post" action="" >
<table><tr><td><b>Entrez votre Nom</b></td><td><input type="text" name="nom" id="nom" class="form-control"  ></td></tr>
<tr><td><b>Entrez Votre message</b></td><td><textarea  name="message" id="message" class="form-control" rows="3"  ></textarea></td></tr></table>

<br/><input type="submit"name="envoyer" value="Envoyer" class="btn btn-default">
</form>
</div>
 <div id="conteneur" class="conteneur">
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
</div>
    </center>



</body>
</html>