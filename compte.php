<?php
ini_set('display_errors','off');
session_set_cookie_params(3600);
ini_set('session.gc_maxlifetime', 3600);
include "session.php";

if(!isset($_SESSION['login_user']))
header("location: monspace1.php");
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Mon Compte</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script src="jquery.min.js"></script>
</head>
<body>
 
        <?php
        
 $acces=new mysqli("localhost","root","","blog");
        $err=$acces->connect_errno;
        if($err)
            die ("Connexion echoué..!!".$acces->error);
    else
    {
        
 if(isset($_POST["add"])){
     
   
     $us1=$_POST["nom"];
     $us2=$_POST["username"];
     $us3=$_POST["pass"];
     $us4=$_POST["tel"];
     $us5=$_POST["mail"];
     $us6=$_POST["datenaiss"];
     $us7=$_POST["sex"];
     $us8=$_POST["nat"];
     $us9=$_POST["addr"];
	 
$sql="UPDATE users SET nom='$us1',username='$us2',pass='$us3',tel='$us4',mail='$us5',datnaiss='$us6',sex='$us7',nat='$us8',addr='$us9' WHERE idd='$id'";
$stm=$acces->query($sql) or die("Error");

    echo"<script>alert('Vos données sont modifié..!!')</script>";
 
$name=$us1;
  $username=$us2; $pass=$us3; $tel=$us4; $email=$us5; $dat=$us6; $sex=$us7; $nat=$us8; $adrr=$us9;
  $login_session=$us2;
 }
  
  }
 
  if(isset($_POST['del'])){
	  $sqlD="delete from users WHERE idd='$id'";
	  $acces->query($sqlD);
	 echo"<script>alert('Votre compte est supprimé..!!')</script>"; 
 header ('Location:logout.php');
	  
  }
 

 
?>  
    
    <script>
 function checkpass() {
     var password = $("#txtNewPassword").val();
	  var confirmPassword = $("#txtConfirmPassword").val();

    if (password == confirmPassword){
	$("#divCheckPasswordMatch").html("<b></b>");
	}
 }
 
 
 
function checkPasswordMatch() {
 
     var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword && confirmPassword.length>0){
	
        $("#divCheckPasswordMatch").html("<b style='color:red;margin-top:5px'>Vos mots de passe ne correspondent pas.</b>");
		}
    else if(password == confirmPassword && confirmPassword.length>0){
	//$("#divCheckPasswordMatch").style.color='green';
        $("#divCheckPasswordMatch").html("<b style='color:lime'>Vos mots de passe sont identiques.</b>");
		//$("#divCheckPasswordMatch").delay(3000).fadeOut('fast');
 }
}

$(document).ready(function () {
   $("#txtConfirmPassword").keyup(checkPasswordMatch);
});
$(document).ready(function () {
   $("#txtNewPassword").keyup(checkPasswordMatch);
});
    </script>
<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>WEB DYNAMIQUE</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="index.html">Home</a></li>
						<li class="main_nav_item"><a href="courses.html">courses</a></li>
						<li class="main_nav_item"><a href="elements.html">Exercices</a></li>
						<li class="main_nav_item"><a href="registre.php">Register</a></li>
                         <li class="main_nav_item"><a href="#">Mon compte</a></li>
						<li class="main_nav_item"><a href="contactez_nous.php">Contact</a></li>
                        <li class="main_nav_item"><a href="telecharger.php">Espace de Télécharegement</a></li>
                         <li class="main_nav_item"><a href="logout.php"><i><img name="deconn" style="margin-top:2px" src="images/logout.png" height="40px" width="50px"/></i></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+212636603922</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="exerices.html">Exercices</a></li>
					<li class="menu_item menu_mm"><a href="registre.php">Register</a></li>
					<li class="menu_item menu_mm"><a href="contactez_nous.php">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Mon Compte</h1>
		</div>
	</div>
	<div class="gtco-section border-bottom">
		<div>
	<br><br>
		 <center><button style="color:black;border-color:DeepSkyBlue;background-color:DeepSkyBlue;border-width:4px;border-radius:8px" width="90px"><b style="color:white">Bonjour <?php echo $login_session; ?></b> </button></center><br><br>
		    <h2 style="margin-left:160px;color:Orange;font-family:Monotype Corsiva"><b><u>Vos informations de profile:</u></b></h2>
			
	 
  <div>
    <form method="post">       
  <table style="align:left;margin-left:220px">
  <tr>
  <td>
     <span><b>Nom Complet :<b></span> <input  value="<?php echo htmlspecialchars($name); ?>" type="text" style="width:400px;margin-right:50px"   class="form-control" name="nom" placeholder="Votre nom complet" required=""  />
	 </td>
	 
	 <td>
     <span><b>Nom d'utilisateur :<b></span>  <input value="<?php echo htmlspecialchars($username); ?>" type="text" style="width:400px" class="form-control" name="username" placeholder="Votre nom d'utilisateur" required=""/>      
      </td>
	  </tr>    
	    <tr>
  <td>
     <span><b>Entrez le mot de passe :<b></span> <input  value="<?php echo htmlspecialchars($pass); ?>" type="password" style="width:400px;margin-right:50px"   name="pass" id="txtNewPassword" class="form-control"  keydown="checkPasswordMatch();"  onblur="checkpass();"   placeholder="Votre mot de passe" required=""  />
	 </td>
	 
	 <td>
     <span><b>Retaper le mot de passe :<b></span>  <input  value="<?php echo htmlspecialchars($pass); ?>" type="password" style="width:400px"  id="txtConfirmPassword" class="form-control"  keydown="checkPasswordMatch();" onblur="checkpass()"  name="passwordre" placeholder="Rentrez Votre mot de passe" required=""/>      
      </td>
	  <td>
	  <br>
	  <div  id="divCheckPasswordMatch" style="margin-left:15px">
</div>
	  </td>
	  </tr>
	  
	    <tr>
  <td>
     <span><b>Votre Numéro de téléphone :<b></span> <input value="<?php echo htmlspecialchars($tel); ?>" type="text" style="width:400px;margin-right:50px"   class="form-control" name="tel" placeholder="Votre Numéro de téléphone" required=""  onkeypress='return event.charCode >= 48 && event.charCode <= 57' ></input>
	 </td>
	 
	 <td>
     <span><b>Votre Email :<b></span>  <input type="email" style="width:400px" value="<?php echo htmlspecialchars($email); ?>" class="form-control" name="mail" placeholder="Votre Email" required=""/>      
      </td>
	  </tr>
	  
	  
	    <tr>
  <td>
     <span><b>Votre date de naissance :<b></span> <input type="date" value="<?php echo htmlspecialchars($dat); ?>" style="width:400px;margin-right:50px"   class="form-control" name="datenaiss" placeholder="Votre nom" required=""   />
	 </td>

	 <td>
     <span><b>Votre sexe :<b></span>  <select type="text"   style="width:400px" class="form-control" name="sex"  required=""/>
	   <option value="<?php echo htmlspecialchars($sex); ?>" selected="selected"><?php echo htmlspecialchars($sex); ?></option>
	   <option value="<?php echo htmlspecialchars($sexother); ?>" ><?php echo htmlspecialchars($sexother); ?></option>
 
</select>  
      </td>
</tr><tr>	  
	  <td>
	  <span><b>Votre Nationnalité :<b></span><select type="text" style="width:400px" class="form-control" name="nat"  required=""/>
	 <option value="<?php echo htmlspecialchars($nat); ?>" selected="selected"><?php echo htmlspecialchars($nat); ?></option>
<option value="Afghanistan">Afghanistan </option>
<option value="Afrique_Centrale">Afrique_Centrale </option>
<option value="Afrique_du_sud">Afrique_du_Sud </option> 
<option value="Albanie">Albanie </option>
<option value="Algerie">Algerie </option>
<option value="Allemagne">Allemagne </option>
<option value="Andorre">Andorre </option>
<option value="Angola">Angola </option>
<option value="Anguilla">Anguilla </option>
<option value="Arabie_Saoudite">Arabie_Saoudite </option>
<option value="Argentine">Argentine </option>
<option value="Armenie">Armenie </option> 
<option value="Australie">Australie </option>
<option value="Autriche">Autriche </option>
<option value="Azerbaidjan">Azerbaidjan </option>
<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Belize">Belize </option>
<option value="Benin">Benin </option>
<option value="Bermudes">Bermudes </option>
<option value="Bielorussie">Bielorussie </option>
<option value="Bolivie">Bolivie </option>
<option value="Botswana">Botswana </option>
<option value="Bhoutan">Bhoutan </option>
<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
<option value="Bresil">Bresil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina_Faso </option>
<option value="Burundi">Burundi </option>
<option value="Caiman">Caiman </option>
<option value="Cambodge">Cambodge </option>
<option value="Cameroun">Cameroun </option>
<option value="Canada">Canada </option>
<option value="Canaries">Canaries </option>
<option value="Cap_vert">Cap_Vert </option>
<option value="Chili">Chili </option>
<option value="Chine">Chine </option> 
<option value="Chypre">Chypre </option> 
<option value="Colombie">Colombie </option>
<option value="Comores">Colombie </option>
<option value="Congo">Congo </option>
<option value="Congo_democratique">Congo_democratique </option>
<option value="Cook">Cook </option>
<option value="Coree_du_Nord">Coree_du_Nord </option>
<option value="Coree_du_Sud">Coree_du_Sud </option>
<option value="Costa_Rica">Costa_Rica </option>
<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
<option value="Croatie">Croatie </option>
<option value="Cuba">Cuba </option>
<option value="Danemark">Danemark </option>
<option value="Djibouti">Djibouti </option>
<option value="Dominique">Dominique </option>
<option value="Egypte">Egypte </option> 
<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
<option value="Equateur">Equateur </option>
<option value="Erythree">Erythree </option>
<option value="Espagne">Espagne </option>
<option value="Estonie">Estonie </option>
<option value="Etats_Unis">Etats_Unis </option>
<option value="Ethiopie">Ethiopie </option>
<option value="Falkland">Falkland </option>
<option value="Feroe">Feroe </option>
<option value="Fidji">Fidji </option>
<option value="Finlande">Finlande </option>
<option value="France">France </option>
<option value="Gabon">Gabon </option>
<option value="Gambie">Gambie </option>
<option value="Georgie">Georgie </option>
<option value="Ghana">Ghana </option>
<option value="Gibraltar">Gibraltar </option>
<option value="Grece">Grece </option>
<option value="Grenade">Grenade </option>
<option value="Groenland">Groenland </option>
<option value="Guadeloupe">Guadeloupe </option>
<option value="Guam">Guam </option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey </option>
<option value="Guinee">Guinee </option>
<option value="Guinee_Bissau">Guinee_Bissau </option>
<option value="Guinee equatoriale">Guinee_Equatoriale </option>
<option value="Guyana">Guyana </option>
<option value="Guyane_Francaise ">Guyane_Francaise </option>
<option value="Haiti">Haiti </option>
<option value="Hawaii">Hawaii </option> 
<option value="Honduras">Honduras </option>
<option value="Hong_Kong">Hong_Kong </option>
<option value="Hongrie">Hongrie </option>
<option value="Inde">Inde </option>
<option value="Indonesie">Indonesie </option>
<option value="Iran">Iran </option>
<option value="Iraq">Iraq </option>
<option value="Irlande">Irlande </option>
<option value="Islande">Islande </option>
<option value="Israel">Israel </option>
<option value="Italie">italie </option>
<option value="Jamaique">Jamaique </option>
<option value="Jan Mayen">Jan Mayen </option>
<option value="Japon">Japon </option>
<option value="Jersey">Jersey </option>
<option value="Jordanie">Jordanie </option>
<option value="Kazakhstan">Kazakhstan </option>
<option value="Kenya">Kenya </option>
<option value="Kirghizstan">Kirghizistan </option>
<option value="Kiribati">Kiribati </option>
<option value="Koweit">Koweit </option>
<option value="Laos">Laos </option>
<option value="Lesotho">Lesotho </option>
<option value="Lettonie">Lettonie </option>
<option value="Liban">Liban </option>
<option value="Liberia">Liberia </option>
<option value="Liechtenstein">Liechtenstein </option>
<option value="Lituanie">Lituanie </option> 
<option value="Luxembourg">Luxembourg </option>
<option value="Lybie">Lybie </option>
<option value="Macao">Macao </option>
<option value="Macedoine">Macedoine </option>
<option value="Madagascar">Madagascar </option>
<option value="Madère">Madère </option>
<option value="Malaisie">Malaisie </option>
<option value="Malawi">Malawi </option>
<option value="Maldives">Maldives </option>
<option value="Mali">Mali </option>
<option value="Malte">Malte </option>
<option value="Man">Man </option>
<option value="Mariannes du Nord">Mariannes du Nord </option>
<option value="Maroc">Maroc </option>
<option value="Marshall">Marshall </option>
<option value="Martinique">Martinique </option>
<option value="Maurice">Maurice </option>
<option value="Mauritanie">Mauritanie </option>
<option value="Mayotte">Mayotte </option>
<option value="Mexique">Mexique </option>
<option value="Micronesie">Micronesie </option>
<option value="Midway">Midway </option>
<option value="Moldavie">Moldavie </option>
<option value="Monaco">Monaco </option>
<option value="Mongolie">Mongolie </option>
<option value="Montserrat">Montserrat </option>
<option value="Mozambique">Mozambique </option>
<option value="Namibie">Namibie </option>
<option value="Nauru">Nauru </option>
<option value="Nepal">Nepal </option>
<option value="Nicaragua">Nicaragua </option>
<option value="Niger">Niger </option>
<option value="Nigeria">Nigeria </option>
<option value="Niue">Niue </option>
<option value="Norfolk">Norfolk </option>
<option value="Norvege">Norvege </option>
<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
<option value="Oman">Oman </option>
<option value="Ouganda">Ouganda </option>
<option value="Ouzbekistan">Ouzbekistan </option>
<option value="Pakistan">Pakistan </option>
<option value="Palau">Palau </option>
<option value="Palestine">Palestine </option>
<option value="Panama">Panama </option>
<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
<option value="Paraguay">Paraguay </option>
<option value="Pays_Bas">Pays_Bas </option>
<option value="Perou">Perou </option>
<option value="Philippines">Philippines </option> 
<option value="Pologne">Pologne </option>
<option value="Polynesie">Polynesie </option>
<option value="Porto_Rico">Porto_Rico </option>
<option value="Portugal">Portugal </option>
<option value="Qatar">Qatar </option>
<option value="Republique_Dominicaine">Republique_Dominicaine </option>
<option value="Republique_Tcheque">Republique_Tcheque </option>
<option value="Reunion">Reunion </option>
<option value="Roumanie">Roumanie </option>
<option value="Royaume_Uni">Royaume_Uni </option>
<option value="Russie">Russie </option>
<option value="Rwanda">Rwanda </option>
<option value="Sahara Occidental">Sahara Occidental </option>
<option value="Sainte_Lucie">Sainte_Lucie </option>
<option value="Saint_Marin">Saint_Marin </option>
<option value="Salomon">Salomon </option>
<option value="Salvador">Salvador </option>
<option value="Samoa_Occidentales">Samoa_Occidentales</option>
<option value="Samoa_Americaine">Samoa_Americaine </option>
<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
<option value="Senegal">Senegal </option> 
<option value="Seychelles">Seychelles </option>
<option value="Sierra Leone">Sierra Leone </option>
<option value="Singapour">Singapour </option>
<option value="Slovaquie">Slovaquie </option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie </option>
<option value="Soudan">Soudan </option> 
<option value="Sri_Lanka">Sri_Lanka </option> 
<option value="Suede">Suede </option>
<option value="Suisse">Suisse </option>
<option value="Surinam">Surinam </option>
<option value="Swaziland">Swaziland </option>
<option value="Syrie">Syrie </option>
<option value="Tadjikistan">Tadjikistan </option>
<option value="Taiwan">Taiwan </option>
<option value="Tonga">Tonga </option>
<option value="Tanzanie">Tanzanie </option>
<option value="Tchad">Tchad </option>
<option value="Thailande">Thailande </option>
<option value="Tibet">Tibet </option>
<option value="Timor_Oriental">Timor_Oriental </option>
<option value="Togo">Togo </option> 
<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
<option value="Tristan da cunha">Tristan de cuncha </option>
<option value="Tunisie">Tunisie </option>
<option value="Turkmenistan">Turmenistan </option> 
<option value="Turquie">Turquie </option>
<option value="Ukraine">Ukraine </option>
<option value="Uruguay">Uruguay </option>
<option value="Vanuatu">Vanuatu </option>
<option value="Vatican">Vatican </option>
<option value="Venezuela">Venezuela </option>
<option value="Vierges_Americaines">Vierges_Americaines </option>
<option value="Vierges_Britanniques">Vierges_Britanniques </option>
<option value="Vietnam">Vietnam </option>
<option value="Wake">Wake </option>
<option value="Wallis et Futuma">Wallis et Futuma </option>
<option value="Yemen">Yemen </option>
<option value="Yougoslavie">Yougoslavie </option>
<option value="Zambie">Zambie </option>
<option value="Zimbabwe">Zimbabwe </option>
</select>
	 
	 </td>
	 
	 <td>
     <span><b>Votre Adresse :</b></span>  <input type="text" style="width:400px" value="<?php echo htmlspecialchars($adrr); ?>" style="width:400px;margin-right:50px" class="form-control" name="addr" placeholder="Votre nom" required=""  />
	 </td>      
      
	  </tr>
	  
	  
	  </table>
      <br>  
	  <center>
       <div style="align:center">
<button name="add" style="background-color:springGreen;color:white;width:270px;height:40px;border:none;border-radius:5px"  type="submit"><b>Modifier Mes Informations</b></button>  
  
	 
 <button style="background-color:Red;color:white;width:200px;border:none;height:40px;border-radius:5px" id="dl" name="del" type="submit"  onclick="return confirm('Vous voulez vraiment supprimmer votre compte..!!')";  ><b>Supprimer mon compte</b></button>	 
</div>   
   </center>
	</form>
 

		
  
  </div>
  
  
		</div>
		
		
	</div>
 
	

	<!-- Footer -->

	<footer class="footer">
		<div class="container">


			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>WEB DYNAMIQUE</span>
							</div>
						</div>

						<p class="footer_about_text"> Notre Site présente les différents cours de web Dynamique et aussi des traveaux pratiques (TPS) pour améliorer et compléter la comprehension les cours.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.html">Home</a></li>
								<li class="footer_list_item"><a href="courses.html">Courses</a></li>
								<li class="footer_list_item"><a href="excercices.html">Exercices</a></li>
                                <li class="footer_list_item"><a href="registre.php">Register</a></li>
                                <li class="footer_list_item"><a href="#">Mon compte</a></li>
								<li class="footer_list_item"><a href="contactez_nous.php">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul class="gtco-footer-links">
							<li style="color:white"><a  target='_blank' href="https://openclassrooms.com/">Open Classrooms</a></li>
							<li style="color:white"><a target='_blank' href="http://www.developpez.com/">Developpez.com</a></li>
							<li style="color:white"><a target='_blank' href="http://www.w3schools.com/">W3Schools</a></li>
							<li style="color:white"><a target='_blank' href="http://html.net/">HTML.net</a></li>
							<li style="color:white"><a target='_blank' href="https://www.youtube.com/user/phpacademy">Code Course-Youtube</a></li>
						</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Fés,Hay Narjiss 721 Maroc
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									+212636603922
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>webdynsiteinternet@gmail.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>


			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>