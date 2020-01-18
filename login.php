 
<?php
  

// each client should remember their session id for EXACTLY 1 hour

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
$acces=new mysqli("localhost","root","","blog");
        $err=$acces->connect_errno;
        if($err)
            die ("Connexion echoué..!!".$acces->error);
		else{
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
 
 $error="Il ya des champs vides !!";
	


}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
 
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($acces,$username);
$password = mysqli_real_escape_string($acces,$password);
 
// SQL query to fetch information of registerd users and finds user match.
$sql="select * from users where pass='$password' AND username='$username'";
$stm=$acces->query($sql) or die("Ereur");
$rows= $stm->num_rows;
 
if ($rows > 0) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: compte.php"); // Redirecting To Other Page
} else {
$error = "Compte n'est pas trouvé !!";
}
mysqli_close($acces); // Closing Connection
}
}
		}
?>