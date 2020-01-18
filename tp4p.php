<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - TP4</title>
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
					<li class="menu_item menu_mm"><a href="elements.html">Excercice</a></li>
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
			<h1>Travaux pratiques N°4, Web dynamique</h1>
		</div>
	</div>
    <!-- tp1 -->
 <div class="row" style='margin-left : 5px; margin-right : 5px '>
        <div class="col-sm-10 col-sm-offset-1">
          <div class="panel panel-primary" style="height :auto">
           
            <div class="panel-body">
				<h2>Exercice 1</h2>
					<p>	Ecrire un script PHP permettant de déclarer 2 variables : nom et prénom et les initialiser avec les valeurs « Formation » et « SIGL » et les afficher sur la page en utilisant trois méthodes syntaxiques différentes : <br>
					<b>1.</b>Deux commandes echo. <br>
                    <b>2.</b>Une commande echo avec une seule chaîne de caractère.  <br>
                    <b>3.</b>Une commande echo avec un point de concaténation. <br>
                </p>
                  <span><a  href="tp4/ex1-tp4.php">Solution</a></span>
              
				<h2>Exercice 2</h2>
					<p>En utilisant un script PHP, déclarer et initialiser un tableau trois mots « bonjour », « tous » et « les étudiants ». Afficher le contenu de ce tableau en utilisant trois fonctions : <br>
					<b>1.</b>La fonction « echo » avec la fonction « implode ». <br>
					<b>2.</b>La fonction « print_r ». <br>
                    <b>3.</b>La fonction « var_dump ».  <br>
                    <b>4.</b>Une fonction utilisateur « alert » qui reçoit un tableau et affiche à l’aide de la fonction « alert » de javascript le message qui contient les mots du tableau.  <br>
                    
                </p>
                <span><a  href="tp4/ex2-tp4.php">Solution</a></span>
				<h2>Exercice 3</h2>
					<p>	Ecrire un script PHP permettant d’initialiser un tableau de 4 cases (contenant des nombres) et en faire la somme. <br>
					<b>1.</b>Sans faire de fonction <br>
					<b>2.</b>En créant une fonction somme .<br>
                    <b> 3.</b>En créant un fichier spécifique qui contient la fonction somme. <br></p>
                <span><a  href="tp4/Exo3.php">Solution</a></span>
				<h2>Exercice4</h2>
					<p>Ecrire un script PHP qui permet de convertir le Dirham en Euro (1Euro=11DH). On initialise un tableau contenant des valeurs en Dirham et en faire la conversion en euros en utilisant une procédure. On affichera la somme totale en euros ainsi que chaque valeur avant et après la convention dans un tableau. Le résultat affiché sera comme suit : <br>
                    <img src="images/ex4.PNG">
                </p>
               <span><a  href="tp4/Ex4.php">Solution</a></span>
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