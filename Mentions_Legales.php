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
			<section>
				<div id="mentions">
					<h2>Mentions Légales</h2>
					<h3>Harmonie Municipale de Vieux-Condé Fresnes</h3>
					<p>Siège Social :</p>
					<p>Rue du 8 Mai 1945</p>
					<p>59690 Vieux-Condé</p><br/>
					<p>Contact</p>
					<p><a href="mailto:harmonie.vieuxconde.fresnes@gmail.com">harmonie.vieuxconde.fresnes@gmail.com</a></p><br/>
					<p>Présidente de l'association</p>
					<p>Christine DI BELLO</p><br/>
					<p>Le site est édité par</p>
					<p>Norman DI BELLO</p>
					<p>Siège Social :</p>
					<p>1618 rue Sadi Carnot</p>
				</div>
				<script>
				function openCookie(evt, cookieName) {
				var i;
				var tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				var tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}
				document.getElementById(cookieName).style.display = "block";
				evt.currentTarget.className += " active";
				}
				document.getElementById('cookies1').style.display = "block";
				</script>
			</section>
			<?php require_once("footer.html")?>
        </div>
    </body>
</html>