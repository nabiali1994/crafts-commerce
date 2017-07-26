<?php
  session_start();
  if (isset($_SESSION['signed-in'])){
    header('location: sign/home.php');
  }
 ?>
 <html>
	<head>
		<title>Cathage Bay</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
	</head>
	<body>
		<header id="header">
			<div class="inner">
			<a href="#" class="logo">  <strong>Bienvenue Dans l'espace des artisants Tunisien(ne)s</strong></a>
				<nav id="nav">
					<a href="./index.php">Acceuil</a>
					<a href="sign/sign-in.php">Se connecter</a>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>
    <section id="banner">
			<div class="inner">
				<header>
					<h1>Bienvenue en Tunisie</h1>
				</header>
				<div class="flex ">
					<div>
						<img class="animation animated bounce" src="./images/jebba.jpg" width="150px" height="150px" />
						<h3>Vêtements</h3>
						<p class="description">Découvrez les habits traditionels des régions Tunisiennes</p>
					</div>
					<div>
						<img class="animation animated bounce" src="./images/makla.jpg" width="150px" height="150px" />
						<h3>Cuisine</h3>
						<p class="description">Feuilletez les salés et les sucrés traditionels de la Tunisie.</p>
					</div>
					<div>
						<img class="animation animated bounce" src="./images/decor.jpg" width="150px" height="150px" />
						<h3>Décor</h3>
						<p class="description">Vases, tableaux, couverture traditionnelle...</p>
					</div>
				</div>
				<footer>
					<a href="choix.php" class="button">Je veux vendre</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="./achat/achat.php" class="button">Je veux acheter</a>
				</footer>
			</div>
		</section>
		<section id="three" class="wrapper align-center">
			<div class="inner">
				<div class="flex flex-2">
					<article>
						<div class="image round">
							<img src="images/pic01.jpg" alt="Pic 01" />
						</div>
						<header>
							<h3>Qui sommes nous?</h3>
						</header>
						<p class="description" style="margin-left: 200px;">Nous sommes des élèves ingénieurs de l'école nationale des sciences de l'informatique (ENSI). Nous nous intéressons dans l'entreprenariat sociale pour mettre la TIC au service de notre Tunisie.</p>
						</article>
					<article>
						<div class="image round">
							<img src="images/pic02.jpg" alt="Pic 02" />
						</div>
						<header>
							<h3>Notre mission</h3>
						</header>
						<p class="description" style="margin-left: 200px;">Nous voulons donner la possibilité aux artisants tunisiens de commercialiser leurs produits avec le minimum de coûts et toute en utilisant une inteerface User-Friendly aux non-informaticiens.</p>
					</article>
          <footer>
            <p style="margin-left: 553px;">
                Équipe:<br>
                Ali Nabi<br>
                Ilyess benzarti<br>
                Fakher Mokadem<br>
            </p>
          </footer>
				</div>
			</div>
		</section>
	</body>
</html>
