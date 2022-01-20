<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Style_page.css"/>
        <title>Harmonie Municipale Vieux-Condé Fresnes</title>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
		<script>
			function openCity(evt, cityName) {
			// Declare all variables
			var i, tabcontent, tablinks;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// Get all elements with class="tablinks" and remove the class "active"
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
			}
		</script>
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
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'Comité')">Comité</button>
					<button class="tablinks" onclick="openCity(event, 'Admin')">Admin</button>
				</div>
				<div id="Comité" class="tabcontent active">
					<h3>Ajout d'un membre du comité</h3>
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
				<div id="Admin" class="tabcontent">
					<h3>Ajout d'un membre admin</h3>
					<form action="AjoutBDAdmin.php" method="post">
						<p>user : <input type="text" name="user" required/></p>
						<p>passw : <input type="password" name="passw" /></p>
						<p>id : <input type="text" name="id" required/></p>
						<p>motDePasse : <input type="password" name="motDePasse" required/></p>
						<p><input type="submit" value="Envoyer"></p>
					</form>
				</div>
			</div>
			<?php require_once("footer.html")?>
		</div>
	</body>
</html>