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
						<li><a class="page_actuelle" href="#">Comité</a></li>
					</ul>
				</nav>
			</header>
			<div align="center">
				<div id="Bdd">
					<a href="AjoutComite.php"><img src="images/ajouter.jpg" loading="lazy" title="Ajout d'un membre"/></a>
					<a href="SoustraitComite.php"><img src="images/soustraire.jpg" loading="lazy" title="Suppression d'un membre"/></a>
					<a href="ModifComite.php"><img src="images/modifier.jpg" loading="lazy" title="Modifier d'un membre"/></a><br/>
				</div>
				<?php

					//  connection
					// test connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = $sql = "SELECT * FROM comite WHERE 1
					GROUP BY Prenom 
					ORDER BY Prenom";	
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					   // affichage dans un tableau html
					 echo "<table border=1 width=50%><thead><tr><th>Prenom</th><th>Nom</th><th>Titre</th><th>Date de Naissance</th><th>Profession</th>
							<th>Code Postal</th><th>Ville</th></tr></thead><tbody>";
						// lecture par ligne
						while($ligne = $result->fetch_assoc()) {
							echo "<tr><td align=center>".$ligne["Nom"]."</td><td align=center>".$ligne["Prenom"]."</td><td align=center>".$ligne["Titre"]."</td>
									<td align=center>".$ligne["Date_de_Naissance"]."</td><td align=center>".$ligne["Profession"]."</td>
									<td align=center>".$ligne["Code_Postal"]."</td><td align=center>".$ligne["Ville"]."</td></tr>";
						}
						echo "</tbody></table>";
					} else {
						echo "Il n'y a personne dans le Comité";
					}
					$conn->close();
				?>
			</div>
			<?php require_once("footer.html")?>
		</div>
	</body>
</html>