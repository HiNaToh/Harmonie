<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Style_page.css"/>
        <title>Harmonie Municipale Vieux-Condé Fresnes</title>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
		<script>
			function setCookie(cname,cvalue,exdays) {
				const d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				let expires = "expires=" + d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}

			function getCookie(cname) {
				let name = cname + "=";
				let decodedCookie = decodeURIComponent(document.cookie);
				let ca = decodedCookie.split(';');
				for(let i = 0; i < ca.length; i++) {
					let c = ca[i];
					while (c.charAt(0) == ' ') {
					c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
					}
				}
				return "";
			}

			function checkCookie() {
				let user = getCookie("username");
				if (user != "") {
					let visite = getCookie("nombreDeVisitePageAccueil");
					visite2=parseInt(visite);
					visite2+=1;
					test=visite2.toString();
					setCookie("nombreDeVisitePageAccueil",test,30);
				} else {
					user = prompt("Rentrez votre nom si vous le voulez ou appuyez sur annuler","");
					if (user != "" && user != null) {
						<?php if(isset($_SESSION['??nom??'])) { echo '??'; }?>
						setCookie("username",user, 30);
						setCookie("nombreDeVisitePageAccueil",1,30);
					}
				}
			}
		</script>
		<script language="JavaScript">
			function deploie(divObj) {
			if (divObj.style.display == "block")
				divObj.style.display="none";
			else if (divObj.style.display == "none")
				divObj.style.display="block";
			}
		</script>
    </head>
    <body onload="checkCookie()">
		<div id="cookies" style="display:block;">
			<a href="javascript:deploie(cookies);">c'est le test</a>
		</div>
        <div id="bloc_page">
			<header>
				<div id="titre_principal">
                    <div id="logo">
						<a href="#"><img src="images/logo_harmonie_petit.jpg" alt="Le logo de l'harmonie de Vieux-Condé Frenes" loading="lazy" title="Retour à l'accueil"/></a>
						<p><h1>Harmonie Municipale<br/>Vieux-Condé Fresnes</h1></p>
					</div>
				</div>
				<nav>
					<ul>
						<li><a class="page_actuelle" href="#">Accueil</a></li>
						<li><a href="Calendrier.php">Calendrier</a></li>
						<li><a href="Comite.php">Comité</a></li>
					</ul>
				</nav>
			</header>
			
			<div id="slideshow">
				<ul id="sContent">
					<li><img src="images/Harmonie_1.jpg" alt="Première image" /></li>
					<li><img src="images/Harmonie_2.jpg." alt="Deuxième image" /></li>
					<li><img src="images/Defile_1.jpg" alt="Troisième image" /></li>
				</ul>
			</div>
			
			<section>
				<article>                
					<h1>A propos de ...</h1>
					<p>La musique a depuis longtemps fait partie intégrante de la vie de la commune de Vieux-Condé.</p>
					<p>Tout commence avec la création de l'Harmonie des Mineurs en 1985, celle-ci est toujours en activité mais sous le nouveau nom de l'Harmonie Municipale de Vieux-Condé Fresnes.</p>
					<p>Cette association est composée de 50 musiciens bénévoles amateurs de tous âges et de tous niveaux.</p>
					<p>L'Harmonie (orchestre) est sous la direction du chef d'orchestre Mr. Bruno DANNA suivi du sous-chef Mr. Jacques Dewolf.</p>
					<p>L'Harmonie (comité) est gérée par la présidente Mme. Christine DI BELLO et le comité composé de 
					<?php
					include("connect.php");

					//  connection
					$conn = new mysqli(SERVEUR, LOGIN, MDP, BDD);
					// test connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql =  "SELECT COUNT(*) AS somme FROM comite WHERE 1";	
					$result = $conn->query($sql);
					$aff=$result->fetch_assoc();
					echo $aff['somme'];
					$conn->close();
					?>
					personnes dont la présidente.</p>
				</article>
				<aside>
					<div id="informations">
						<h1>Contact</h1>
						<p>L'association de l'Harmonie Municipale Vieux-Condé Fresnes.</p>
						<p>Ecole de Musique Guy Deplus</p>
						<p>Rue du 8 Mai 1945</p>
						<p>59690 Vieux-Condé</p>
						<p><a href="mailto:harmonie.vieuxconde.fresnes@gmail.com">harmonie.vieuxconde.fresnes@gmail.com</a></p>
					</div>
                </aside>
			</section>
			
			<?php require_once("footer.html")?>
        </div>
    </body>
</html>