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
			<div align="center">
				<form action="AjoutBDComite.php" method="post">
					<p>user : <input type="text" name="user" required/></p>
					<p>passw : <input type="password" name="passw" /></p>
					<p>nom : <input type="text" name="nom" required/></p>
					<p>prenom : <input type="text" name="prenom" required/></p>
					<p>date de naissance: <input type="date" name="date_de_naissance" required/></p>
					<p>profession : <input type="text" name="profession" required/></p>
					<p>titre : <input type="text" name="titre" placeholder="Membre" required/></p>
					<p>telephone : <input type="number" name="telephone" required/></p>
					<p>rue : <input type="text" name="rue" required/></p>
					<p>code postal : <input type="number" name="code_postal" placeholder="59690" required/></p>
					<p>ville : <input type="text" name="ville" placeholder="Vieux-Condé" required/></p>
					<p><input type="submit" value="Envoyer"></p>
					</form>
			</div>
			<?php require_once("footer.html")?>
		</div>
	</body>
</html>