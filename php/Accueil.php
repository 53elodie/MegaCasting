<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/Accueil.css"/>
	<link rel="stylesheet" type="text/css" href="../css/PartieSpe/slide.css"/>
	<link rel="stylesheet" type="text/css" href="../css/PartieCommune/Bas/PartieFooter.css"/>
    <link rel="stylesheet" type="text/css" href="../css/PartieCommune/Haut/PartieHeader.css"/>
    <link rel="stylesheet" type="text/css" href="../css/PartieCommune/Haut/PartieMenu.css"/>
	
	<title>Accueil</title>
</head>

<body>
	<!-- Partie Connexion -->
	<div id="Conteneur1">	    
		<?php
			include 'Menu/Haut/PartieHeader.php';
		?>
	</div>

	<!-- Corps -->
	<div id="Conteneur2">
		<!-- Menu  -->

		<?php
			include 'Menu/Haut/PartieMenu.php';
		?>

		<!-- Slide  -->

		<span id="sl_play" class="sl_command"></span>
		<span id="sl_pause" class="sl_command"></span>
	 
		<span id="sl_i1" class="sl_command sl_i"></span>
		<span id="sl_i2" class="sl_command sl_i"></span>
		<span id="sl_i3" class="sl_command sl_i"></span>
		<span id="sl_i4" class="sl_command sl_i"></span>

		<section id="slideshow">
		
			<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
			<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
		
			<div class="container">
				<div class="c_slider"></div>
				<div class="slider">
					<figure>
						<a href="" width="640" height="310" />
						<img src="http://127.0.0.1/SiteBts/image/Fond-Connexion.jpg" alt="" width="640" height="310" />
						<figcaption>Test 1</figcaption>
					</figure>
			
					<figure>
						<a href="" width="640" height="310" />
						<img src="http://127.0.0.1/SiteBts/image/Fond-Connexion.jpg" alt="" width="640" height="310" />
						<figcaption>Test 2</figcaption>
					</figure>

					<figure>
						<a href="" width="640" height="310" />
						<img src="http://127.0.0.1/SiteBts/image/Fond-Connexion.jpg" alt="" width="640" height="310" />
						<figcaption>Test 3</figcaption>
					</figure>
			
					<figure>
						<a href="" width="640" height="310" />
						<img src="http://127.0.0.1/SiteBts/image/Fond-Connexion.jpg" alt="" width="640" height="310" />
						<figcaption>Test 4</figcaption>
					</figure>
					
					
				</div>
			</div>
		
			<span id="timeline"></span>
		</section>

		<!-- Actu  -->

		<div id="ActuCasting">
			<span id="Pop">Populaire</span>
			<span id="Nou">Nouveau</span>

		</div>
	
	</div>
	<!-- Partie Bot  -->
	<div id="Conteneur3">
		<?php
			include 'Menu/Bas/PartieFooter.php';
		?>
	</div>
</body>

	
</html>
