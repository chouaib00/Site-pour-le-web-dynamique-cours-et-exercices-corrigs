<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("blog", $connection);

session_start();// Starting Session
// Storing Session

$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select * from users where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$adrr=$row['addr'];
$name=$row['nom'];
$username=$row['username'];
$pass=$row['pass'];
$sex=$row['sex'];
$tel=$row['tel'];
$nat=$row['nat'];
$email=$row['mail'];
$dat=$row['datnaiss'];
$id=$row['idd'];

if ($row['sex']=='Homme'){
$login_session ="Monsieur ".$row['nom'];
$sexother="Femme";
}
else{
$login_session ="Madame ".$row['nom'];	
$sexother="Homme";
}

if(!isset($login_session)){
	mysql_close($connection);
	 header("location: monspace.php");
// SQL Query To Fetch Complete Information Of User

}

?>
 