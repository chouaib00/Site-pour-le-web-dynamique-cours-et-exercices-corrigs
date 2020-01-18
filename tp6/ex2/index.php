
<html>
    <head>
        	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    </head>

    <body>
	
         <?php
      $us1="";
	  $us2="";
$acces=new mysqli("localhost","root","","profil");
        $err=$acces->connect_errno;
        if($err)
            die ("Connexion echoué..!!".$acces->error);
    else
    {
        
 if(isset($_POST["conn"])){
     
     if(empty($_POST["log"]) or empty($_POST["log"])){
 echo"<script>alert('il faut remplir tous les champs..!')</script>";}
    else{ 
     $us1=$_POST["log"];
     $us2=$_POST["pass"];
    
     
$sql="select * from compte where log='".$us1."' and passw='".$us2."';";
$stm=$acces->query($sql) or die("Error");
$rowcnt= $stm->num_rows;
    if($rowcnt>0)
		echo "<center><div style='color:white;background-color:red;width:150px'>  Vous etes connecté</div></center>";
	
	else
		echo "<center><div style='color:white;background-color:red;width:130px'>  donnés erronnés</div><center>";
	}
 }
    }
?>  
    <div id ="for" class="container col-md-4 col-lg-offset-4" style="background-color:white" >
	
        
     <form  method="post" action="">
	<h3><center><b>Formulaire d'authentification</b></center></h3>
	<hr>
           <label>Nom utilisateur</label><input type="text" class="form-control" value="<?php echo $us1; ?>" name="log"/>
       
      <label>Mot de passe</label><input type="password" class="form-control" value="<?php echo $us2; ?>" name="pass"/>
       
       <center><input name="conn" type="submit" class="btn btn-primary" style="width : 110px;" value="Connecter"/>
        <button type="reset" class="btn btn-danger" style="width : 110px;" value="Reset">Reinitialiser</button>  
          <br><br> <a href="ex2.php"><u>Créez un nouveau utlisateur</u></a>
        </form>
       


             
    </body>
</html>