<?php
function connexion(){
	$servername = "localhost";
	$username = "root";
	$data_base ="scott";
	$password = "";

	$conn = new mysqli($servername, $username, $password,$data_base);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	//else 
		//echo "Connexion avec la base de doonnées est reussi ";

	return $conn;
}

function login(){
 
 if(isset($_POST['nom_utilisateur'])&& isset($_POST['mot_passe']) ){
	 $nm = $_POST['nom_utilisateur'];
 $pw= $_POST['mot_passe']; 
 
$connex = connexion();
  $stat = $connex->query("SELECT * FROM passwd where LOGIN ='$nm' AND PASS='$pw'");
  
  if($stat->num_rows > 0 ){
		echo  "<script> $('#message').text('Connexion  reussiée');</script>";
		session_start();
		$_SESSION['utilisateur'] = $nm ;
		header('Location:TP1/TP1_ENNONCE.php');
	}
	elseif($stat->num_rows == 0){
		echo  "<script> $('#message').text('Connexion na pas reussiée');</script>";
	}
	
	
	

}
}


?>