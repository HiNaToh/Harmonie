<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Style_page.css"/>
        <title>Harmonie Municipale Vieux-Condé Fresnes</title>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    </head>
	<body>
		<div id="bloc_page">
			<header>
				<div id="titre_principal">
					<div id="logo">
						<a href="Accueil.php"><img src="images/logo_harmonie_petit.jpg" alt="Le logo de l'harmonie de Vieux-Condé Frenes" loading="lazy" title="Retour à l'accueil"/></a>
						<p><h1>Harmonie Municipale<br/>Vieux-Condé Fresnes</h1></p>
					</div>
				</div>
				<nav>
					<ul>
						<li><a href="Accueil.php">Accueil</a></li>
						<li><a href="Calendrier.php">Calendrier</a></li>
						<li><a href="Comite.php">Comité</a></li>
					</ul>
				</nav>
			</header>
			<form action="SoustraitBDComite.php" method="post">
				<p>user : <input type="text" name="user" /></p>
				<p>passw : <input type="text" name="passw" /></p>
				<p>nom : <input type="text" name="nom" /></p>
				<p>prenom : <input type="text" name="prenom" /></p>
				<p>titre : <input type="text" name="titre" /></p>
				<p><input type="submit" value="Envoyer"></p>
			</form>
			<?php require_once("footer.html")?>
		</div>
	</body>
</html>