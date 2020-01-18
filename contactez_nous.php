<?php
if(isset($_POST['sendUs'])){
	include "email.php";
		
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Contact</title>
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
						<li class="main_nav_item"><a href="excercices.html">Exercices</a></li>
						<li class="main_nav_item"><a href="registre.php">Register</a></li>
                        <li class="main_nav_item"><a href="compte.php">Mon Compte </a></li>
						<li class="main_nav_item"><a href="#">Contact</a></li>
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
                    <li class="menu_item menu_mm"><a href="contact.php">Mon Compte</a></li>
					<li class="menu_item menu_mm"><a href="#">Contact</a></li>
                    
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
			<h1>Contact</h1>
		</div>
	</div>
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row row-pb-md" >
				<div class="col-md-6 animate-box"  >
					<h3><b>Conntactez Nous:</b></h3>
					<form action="" method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Nom</label>
								<input type="text"  name="name" class="form-control" placeholder="Votre nom complet" required="">
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Votre addresse email" required="">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Objet</label>
								<input type="text" name="subject" class="form-control" placeholder="L'objet de ce message" >
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
							
								<label class="sr-only" for="message">Message</label>
								<textarea  name="message" cols="30" rows="4" class="form-control" placeholder="Ecrire votre Message" required=""></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Envoyer le Message" name="sendUs" width="50px" class="btn btn-primary btn-lg">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3><b>Informations:</b></h3>
						<ul>
							<li class="address">Fés,Hay Narjiss 721 Maroc</li>
							<li class="phone"><a>+212 658404143</a></li>
							<li class="email">  webdynsiteinternet@gmail.com</li>
							<li class="url"><a href="">www.webdyn.com</a></li>
						</ul>
					</div>


				</div>
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
								<li class="footer_list_item"><a href="#">Contact</a></li>
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