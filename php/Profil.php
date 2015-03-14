<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/Profil.css"/>
	<link rel="stylesheet" type="text/css" href="../css/PartieSpe/slide.css"/>
	<link rel="stylesheet" type="text/css" href="../css/PartieCommune/Bas/PartieFooter.css"/>
    <link rel="stylesheet" type="text/css" href="../css/PartieCommune/Haut/PartieHeader.css"/>
    <link rel="stylesheet" type="text/css" href="../css/PartieCommune/Haut/PartieMenu.css"/>
	
	<title>Profil</title>
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

		<div id="BlocProfil">
			<img id="ImgProfil" src="http://127.0.0.1/SiteBts/image/Fond-Connexion.jpg" />
            
			<span id="NomProfil">Nom</span>
			<span id="PrenomProfil">Prenom</span>
			<span id="Age">Age :</span>

			<span id="Mail">Email :</span>
			<span id="Telephone">Téléphone :</span>
			<span id="Adresse"> Adrese :</span>

			<span id="DescProfil">Description : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>

			<span id="MetierProfil">Compétences : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>

			<span id="TexteSite"> Site de la sociéter :</span>

			<a id="Site" href="www.google.com">www.google.com</a>

		    <form>
		  		<input id="ButtonPhoto" type="button" name="ButtonPhoto" value="Photos" />
                <input id="ButtonInfo" type="button" name="ButtonInfo" value="Information" />
		  		<input id="ButtonCv" type="button" name="ButtonCv" value="Cv" />
            </form>
		</div>

		<div id="BestProfil">
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