<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/Casting.css"/>
	<link rel="stylesheet" type="text/css" href="../css/PartieSpe/slide.css"/>
	<link rel="stylesheet" type="text/css" href="../css/PartieCommune/Bas/PartieFooter.css"/>
    <link rel="stylesheet" type="text/css" href="../css/PartieCommune/Haut/PartieHeader.css"/>
    <link rel="stylesheet" type="text/css" href="../css/PartieCommune/Haut/PartieMenu.css"/>
	
	<title>Casting</title>
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

		<div id="BlocCasting">
			<img id="ImgCasting" src="http://127.0.0.1/SiteBts/image/Fond-Connexion.jpg" />
            
			<span id="TitreCasting">Titre Casting</span>

			<span id="DescCasting">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>

			<span id="MetierCasting">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>

			<span id="NbPersoRechCasting"> Nombre personne rechercher : 8</span>

			<span id="NbPersoActuCasting"> Nombre personne rechercher : 5</span>

		    <form>
                <input id="ButtonParticiper" type="button" name="ButtonParticiper" value="Particper" />
            </form>
		</div>

		<div id="BestCasting">
			<span>gtgzt</span>
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
 