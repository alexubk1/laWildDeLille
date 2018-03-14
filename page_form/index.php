
<?php
include 'php/message.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Alexandre Aurélien Maxence Nezzar" />
	<meta name="description" content="Page 4 - Contact" />
	<meta name="copyright" content="© WildCodeSchool" />

	<title>Contact</title>

	<!-- Latest compiled and minified Bootstrap CSS files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified AOS CSS files -->
	<link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" />
	<!-- Personal CSS -->
	<link rel="stylesheet" href="./css/style.css" />
	<!-- fullPage CSS -->
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<!-- Hover Master CSS -->
	<link rel="stylesheet" media="all" href="css/hover.css" >
	<!-- fullPage + Navbar CSS -->
	<link rel="stylesheet" type="text/css" href="css/navbar_and_full.css">
	<!-- Footer CSS -->
	<link rel="stylesheet" href="css/Footer-with-button-logo.css">

	<!-- CSS for media queries (low resolution) -->
	<link rel="stylesheet" media="(max-width: 960px)" href="css/petite_resolution.css" />

</head>
<header>
	<!-- navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="images/wild_logo3.png" alt="logo de la Wild">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="hvr-buzz"><a href="../index.html">Menu</a></li>
					<li class="hvr-buzz"><a href="index.html">Description</a></li>
					<li class="hvr-buzz"><a href="../page_gif/index.html">Les joies</a></li>
					<li class="hvr-buzz"><a href="../page_form/index.html">Contact</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
</header>

<!-- welcome fullpage  -->
<div id="fullpage">
	<div class="section section-0-img" >
		<img src="images/bg6.jpg" alt="" data-focus-left="0.34" data-focus-top="0.15" data-focus-right="0.87" data-focus-bottom="0.79"/>
		<div class="text-div" id="section0">
			<h2 class="child-1 en-boite">Contact</h2>
		</div>
	</div>

	<div class="section" id="normalScroll">
		<div class="comment">
			<?php
			$consultez="php/messages.txt";
			readfile($consultez);
			?>
		</div>

		<section class="formulaire">
			<form action="" method="post">
				<div>
					<fieldset>
						<legend>Votre Nom</legend>
						<input type="text" name="pseudo">
					</fieldset>
					<fieldset>
						<legend>Postez un message pour le livre d'or</legend>
						<textarea class="textarea_lor" cols="60" rows="6" name="message"></textarea>
					</fieldset>
					<input type="submit" value="Envoyer" class="btn btn-default" name="submitButton">

					<!-- On va créer un lien vers une autre page pour ceux qui veulent consulter le livre d'or sans poster dedans -->
					<p>Pour consulter simplement le livre d'or, <a href="php/consultezlo.php" target="_bank">cliquez ici</a>
					</p>
				</div>
			</form>
		</section>

		<section id="contact">
			<div class="section-content">
				<h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Contactez-nous</span></h1>
				<h3 class="subtext">C'est l'histoire d'un aveugle qui rentre dans un bar, puis dans une table, puis dans une chaise, puis dans un mur...</h3>
			</div>
			<div class="contact-section">
				<div class="container">
					<form method="post" action="php/traitement_formulaire.php">
						<div class="col-md-6 col-xs-12 ">
							<div class="form-group">
								<label for="exampleInputUsername">Nom</label>
								<input type="text" id="nom" name="nom" tabindex="1" class="form-control" placeholder="Nom" />
							</div>
							<div class="form-group">
								<label for="exampleInputfirstname">Prenom</label>
								<input type="text" id="prenom" name="prenom" tabindex="5" class="form-control" placeholder="Prenom" />
							</div>
							<div class="form-group">
								<label for="exampleInputEmail">Email :</label>
								<input type="text" class="form-control" id="email" name="email" tabindex="2" placeholder="Email" />
							</div>
						</div>
						<div class="col-md-6 col-xs-12 deux">
							<div class="form-group">
								<label for="exampleInputObjet">Objet :</label>
								<input type="text" class="form-control" id="objet" name="objet" tabindex="3" placeholder="Objet" />
							</div>
							<div class="form-group">
								<label for="description" for="message">Message :</label>
								<textarea class="form-control" id="message" name="message" tabindex="4" placeholder="Messsage"></textarea>
							</div>
							<div>
								<input type="submit" name="envoi" value="Envoyer !" class="btn btn-default submit" aria-hidden="true" />
							</div>
						</div>
					</form>
				</div>
			</div>

		</section>
		<footer id="myFooter">
			<div class="container footer-container">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<img src="images/wild_logo3.png" alt="logo wild" class="img_logo">
					</div>
					<div class="col-sm-3 col-xs-12">
						<h5>Navigation</h5>
						<ul>
							<li><a href="../index.html">Menu</a></li>
							<li><a href="../page_description/index.html">Description</a></li>
							<li><a href="../page_gif/index.html">Les joies de la Wild</a></li>
							<li><a href="../page_form/index.html">Contact</a></li>
						</ul>
					</div>
					<div class="col-sm-3 col-xs-12">
						<h5>A propos</h5>
						<ul>
							<li><a href="#">Laisser un commentaire</a></li>
						</ul>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="social-networks">
							<a class="hvr-float-shadow" href="https://twitter.com/wildschoollille" class="wild" target="_blank"><img src="images/wild_logo.png" alt="site wild"/></a>
							<a class="hvr-float-shadow" href="https://fr-fr.facebook.com/wildcodeschool/" class="facebook" target="_blank"><img src="images/facebook.png" alt="facebook wild"/></a>
							<a class="hvr-float-shadow" href="https://twitter.com/wildschoollille" class="google" target="_blank"><img src="images/twitter.png" alt="twitter wild"/></a>
						</div>
						<div>
							<a class= "btn btn-default btn-lg" type="button" onclick="window.location.href='../page_form/index.html#contact'">Contactez-nous</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<p>© 2018 Copyright and Stuff <span><img src="images/like.png" /></span> Made with love by Wild Code School </p>
			</div>
		</footer>

	</div>

</div>


<!-- fullPage JS -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#fullpage').fullpage({
				//Navigation
				// menu: '#menu',
				// lockAnchors: false,
				// anchors:['firstPage', 'secondPage'],
				// navigation: true,
				// navigationPosition: 'right',
				// navigationTooltips: ['firstSlide', 'secondSlide'],
				// showActiveTooltip: false,
				// slidesNavigation: false,
				// slidesNavPosition: 'bottom',

				// //Scrolling
				// css3: true,
				// scrollingSpeed: 700,
				// autoScrolling: true,
				// fitToSection: true,
				// fitToSectionDelay: 1000,
				scrollBar: true,
				// easing: 'easeInOutCubic',
				// easingcss3: 'ease',
				// loopBottom: false,
				// loopTop: false,
				// loopHorizontal: true,
				// continuousVertical: false,
				// continuousHorizontal: false,
				// scrollHorizontally: false,
				// interlockedSlides: false,
				// dragAndMove: false,
				// offsetSections: false,
				// resetSliders: false,
				fadingEffect: true,
				normalScrollElements: '#normalScroll, #myFooter',
				// scrollOverflow: false,
				// scrollOverflowReset: false,
				// scrollOverflowOptions: null,
				// touchSensitivity: 15,
				// normalScrollElementTouchThreshold: 5,
				// bigSectionsDestination: null,

				// //Accessibility
				// keyboardScrolling: true,
				// animateAnchor: true,
				// recordHistory: true,

				// //Design
				// controlArrows: true,
				// verticalCentered: true,
				// sectionsColor : ['#ccc', '#fff'],
				// paddingTop: '3em',
				// paddingBottom: '10px',
				// fixedElements: '#header, .footer',
				// responsiveWidth: 0,
				// responsiveHeight: 0,
				// responsiveSlides: false,
				// parallax: false,
				// parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

				// //Custom selectors
				// sectionSelector: '.section',
				// slideSelector: '.slide',

				// lazyLoading: true,

				// //events
				// onLeave: function(index, nextIndex, direction){},
				// afterLoad: function(anchorLink, index){},
				// afterRender: function(){},
				// afterResize: function(){},
				// afterResponsive: function(isResponsive){},
				// afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
				// onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
			});
	});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.fullPage.js"></script>
<script type="text/javascript" src="js/responsify.js"></script>
<script type="text/javascript" src="js/responsify.min.js"></script>

</body>
</html>
