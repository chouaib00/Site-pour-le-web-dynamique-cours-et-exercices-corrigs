
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - TP7</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

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
						<li class="main_nav_item"><a href="courses.html">Courses</a></li>
						<li class="main_nav_item"><a href="excercices.html">Exercices</a></li>
						<li class="main_nav_item"><a href="registre.php">Register</a></li>
                        <li class="main_nav_item"><a href="monspace1.php">Mon compte</a></li>
						<li class="main_nav_item"><a href="contactez_nous.php">Contact</a></li>
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
					<li class="menu_item menu_mm"><a href="excercices.html">Excercice</a></li>
					<li class="menu_item menu_mm"><a href="registre.php">Register</a></li>
                    <li class="menu_item menu_mm"><a href="monspace1.php">Mon compte</a></li>
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
		</div>
		<div class="home_content">
			<h1>Travaux pratiques N°7, Web dynamique</h1>
		</div>
	</div>
    <!-- tp1 -->
 <div class="row" style='margin-left : 5px; margin-right : 5px '>
        <div class="col-sm-10 col-sm-offset-1">
          <div class="panel panel-primary" style="height :auto">
           
            <div class="panel-body">
			<p><b>Dans ce TP, nous allons reprendre l’application réalisée dans le TP 6 (tout en ajoutant d’autres fonctionnalités) en utilisant la programmation orienté objet.<br>
			Les tables seront générées automatiquement en important Ie schéma relationnel « scott.sql ».<br>
					</b></p>
				<h2>Exercice 1</h2>
					<p>1.	Concevoir une classe « DataBase » qui permettra de faire la gestion de la base de données. Cette classe comportera les méthodes suivantes :<br>
                     <b>a.</b> Connexion à la base de données.<br>
                     <b>b.</b> Insertion d’un objet dans une table (le nombre d’attribut de l’objet est le même que celle de la table).<br>
                     2.	Créer une classe « Employe » dans un fichier PHP séparé. Cette classe comporte les attributs de la table « EMP ».<br>
                     3.	Ajouter un constructeur permettant de remplir les attributs de la classe (utiliser des arguments par defaut puisque seul le numéro de l’employé qui devrait être non null).<br>
                     4.	Ajouter les méthodes getters à la classe « Employe». <br>
                     5.	Tester l’insertion d’un objet employé instancié dans la table « EMP ».<br>
	
					</p>
				<h2>Exercice 2</h2>
					<p>1. Ajouter au formulaire deux autres boutons « rechercher » et « supprimer », ces deux boutons vont permettre de rechercher et de supprimer un employé de la table « EMP » à partir de son numéro.<br>
				        2. Ajouter à la classe « DataBase » la fonction membre « rechercher ». cette fonction accepte comme paramètre le N° de l’employé et le nom de la table et devrait retourner l’objet courant de l’employé recherché.<br>
						3. Ajouter à la classe « DataBase » la fonction membre « supprimer ». cette fonction accepte comme paramètre le N° de l’employé et le nom de la table et devrait supprimer l’employé à partir de son numéro.</p>
				         <center><img src="images/tp7_ex2.png"></center>
                         <span><a  href="tp7/ex1_acceuil.php">Solution</a></span>
                

				
			</div>
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
								<li class="footer_list_item"><a href="excercices.html">Exercies</a></li>
                                <li class="footer_list_item"><a href="registre.php">Register</a></li>
                                <li class="footer_list_item"><a href="monspace1.php">Mon compte</a></li>
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




























