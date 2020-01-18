<?php

function connexion2(){
		$servername = "localhost";
		$username = "root";
		$data_base ="scott";
		$password = "";

		$conn = new mysqli($servername, $username, $password,$data_base);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		return $conn;
	}

function test_connexion(){
 
 if(isset($_POST['nom_utilisateur'])&& isset($_POST['mot_passe']) ){
	 $nm = $_POST['nom_utilisateur'];
 $pw= $_POST['mot_passe']; 
 
$connex = connexion2();
  $stat = $connex->query("SELECT * FROM passwd where LOGIN ='$nm' AND PASS='$pw'");
  
  if($stat->num_rows > 0 ){
		echo  "<script> $('#message').text('Connexion  reussiée');</script>";
	  	echo"<script> $('#message').addClass('alert alert-success');</script>";
		echo"<script> $('#message').show('slow');</script>";
	}
	elseif($stat->num_rows == 0){

		echo"<script> $('#message').text('Connexion  pas reussiée');</script>";
	  	echo"<script> $('#message').addClass('alert alert-danger');</script>";
		echo"<script> $('#message').show('slow');</script>";

	}
	
	
	

}
}


	
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