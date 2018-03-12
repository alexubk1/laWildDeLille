
<?php
include 'php/message.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>page 4</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" media="(min-width: 450px)" href="css/small_resolution.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="row vertical-align">
				<div class="col-md-5 col-xs-12">
					<img src="images/Einstein.jpg" alt="photo d'Einstein" class="img_einstein">
				</div>
				<div class="col-md-7 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l</p>
				</div>
			</div>
			<div class="row vertical-align">
				<div class="col-md-5 col-md-push-7 col-xs-12">
					<img src="images/steeve_jobs.jpg" alt="photo steve jobs" class="img_steeve_jobs">
				</div>
				<div class="col-md-7 col-md-pull-5 col-xs-12">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l</p>
				</div>
			</div>
			<div class="row vertical-align">
				<div class="col-md-5 col-xs-12">
					<img src="images/mark.jpg" alt="photo mark zukerberg" class="img_mark">
				</div>
				<div class="col-md-7 col-xs-12">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l</p>
				</div>
			</div>
		</div>
		<hr/>
	</section>

	<div class="comment">
		<?php
		$consultez="messages.txt";
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
					<textarea class="textarea_lor" cols="40" rows="6" name="message"></textarea>
				</fieldset>
				<input type="submit" value="Envoyer" class="bouton" name="submitButton">

				<!-- On va créer un lien vers une autre page pour ceux qui veulent consulter le livre d'or sans poster dedans -->
				<p>Pour consulter simplement le livre d'or, <a href="php/consultezlo.php">cliquez ici</a>
				</p>
			</div>
		</form>
	</section>
	<section id="contact">
		<div class="section-content">
			<h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Contactez-nous</span></h1>
			<h3 class="subtext">Veuillez nous excuser par avance pour les délais de réponse, notre assistant Gaëtan est un peu lent..</h3>
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
							<input type="submit" name="envoi" value="Envoyer le formulaire !" class="btn btn-default submit" aria-hidden="true" />
						</div>
					</div>
				</form>
			</div>
		</div>

	</section>

</body>
</html>
