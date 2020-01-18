<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - TP3</title>
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
			<h1>Travaux pratiques N°3, Web dynamique</h1>
		</div>
	</div>
    <!-- tp1 -->
 <div class="row" style='margin-left : 5px; margin-right : 5px '>
        <div class="col-sm-10 col-sm-offset-1">
          <div class="panel panel-primary" style="height :auto">
        
            <div class="panel-body">
				<h2>Exercice 1 : (switch, setTimeout)</h2>
                <p>En utilisant la bibliothèque JQuery (effets d'animation) et la méthode addEventListener(), développer une page web qui affiche un diaporama comme la figure suivante :<br>
						<p>Le bouton « previous » affiche l'image précédente et le bouton « next » affiche l'image suivante.<br>
                       Le bouton « play » permet de lancer l'affichage diaporama pour les différentes images du répertoire. Chaque cinq secondes l'image actuelle est remplacée par l'image suivante. Utiliser la commande « setTimeout ». Une fois le diaporama est lancé, la valeur du bouton est modifiée de « play » à « pause » et lorsqu'on appuie de nouveau sur le bouton le  diaporama est arrêté.</p>
                	<center><img src="images/tp3_ex1.png"></center><br>
                        <span><a  href="tp3/exp1_tp3.html">Solution</a></span>
				<h2>Exercice 2: Validation d'un formulaire</h2>
					<p>Développer un formulaire comme la figure suivante .<br>
                    <center><img src="images/tp3_ex2.png"></center><br>
					1.	Utiliser JQuery et les expressions régulières pour valider le contenu des champs de texte :<br>
                     a.	Vérifier que le champ « Login » n'est pas vide, contient une valeur de longueur 5 à 15 et ne contient que des lettres ou des chiffres ou un _.<br>
                     b. Vérifier que le champ « Mot de passe » n'est pas vide, contient une valeur de longueur 8 à 15, ne contient que des lettres et des chiffres (Ex : mdp=77777777 => faux).<br>
                     c.	Vérifier que le champ « Email » n'est pas vide, contient une valeur valide (vérifier qu'il y a un @ suivi d'au moins une lettre puis un . Suivi d'au moins deux lettres) et ne contient pas les caractères spéciaux suivants : (, ), <, >,,, ;, :, \,  ,[, ] .<br>
                     d.	Créer une fonction qui élimine les espaces, parenthèses et tirets du champ
                     Puis vérifier qu'il n'est pas vide, qu'il ne contient que des chiffres et qu'il a une taille de
                     1 () chiffres.<br>
                     e.	Vérifier que l'adresse n'est pas vide.<br>
                     f.	Vérifier que le code postal contient une valeur numérique de 5 chiffres. <br>
                     g.	Vérifier que le champ « ville » n'est pas vide et ne contient que des lettres <br>
                     Si l'une de ces conditions ne sont pas valides, changer la couleur du fond d'écran et afficher une fenêtre avec l'erreur comme illustré dans la figure ci-dessus.<br>
                    <center><img src="images/tp3_ex2img2.png"></center><br>
                     2.	Modifier le programme précédent afin de valider chaque champ dès sa modification, comme dans la figure ci-dessous. Le bouton « submit » ne lance plus la validation mais il n'envoie pas les données si elles ne sont pas valides.<br>
                     3.	En utilisation le Dom « pur », ajouter le message d'erreur convenable à côté de l'icône.<br>    
                </p>
                 <span><a  href="tp3/exp2_tp3.html">Solution</a></span>
				<h2>Exercice 3</h2>
					<p>Développer une page web qui demande à l'utilisateur d'insérer son prénom et nom lors de sa première visite (cf. figure ci-dessous) et les sauvegarder dans un cookie. Puis, lors de sa deuxième visite, elle ne lui demande pas d'insérer les données, elle les récupère du cookie et affiche un message de bienvenue avec le prénom et le nom de l'utilisateur, la date de sa dernière visite et le nombre d'accès au site (cf.
                    figure ci-dessous). Puis, Elle met à jour dans le cookie la date de la dernière visite et le nombre d'accès.</p>
                      <br>
                   <center><img src="images/tp3_ex3img1.png"></center><br>
                    <center><p> <b> Figure 1 : 1 ère visite</b></p></center>
                     <br>
                    <center><img src="images/tp3_ex3img2.png"></center><br>
                    <center><p> <b> Figure 2 : 3ème visite</b></p></center>
                     <br>
				 <span><a  href="tp3/ex3.html">Solution</a></span>
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