 <?php
 	require_once("ex1.php");


?>

<html>
	<head>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<meta charset="UTF-8">
	</head>
 </div>
 
 <style>
 div.container {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
}
 
 </style>
	 <body style="background-color:#E8EBEB">

<br>
<br>
<br>
<br>
<br>
<br>
	<div id ="for" class="container col-md-4 col-lg-offset-4" style="background-color:white" >
	<div id="message"><h2 class="form-signin-heading"></h2></div>

	<form class="form-signin " method="post" action="">
	<h3><center><b>Formulaire d'authentification</b></center></h3>
	<hr>
	<label>Nom utilisateur</label>
	<input type="text" class="form-control" name="nom_utilisateur" id="nom_utilisateur" required=""/>
	<label>Mot de passe</label>
	<input type="password" class="form-control" name="mot_passe" id="mot_passe" required=""/><br>
	
	<center><input type="submit" class="btn btn-primary" style="width : 110px;" value="Se connecter" />
  <button type="reset" class="btn btn-danger" style="width : 110px;" value="Reset">Reinitialiser</button>
          <br><br> <a href="ex2.php"><u>Créez un nouveau utlisateur</u></a>
	
	<br>
	</form>

	</div>

	</body>

</html>


      

 <?php

	login();

?>