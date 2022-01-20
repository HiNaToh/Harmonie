<?php
	$user=$_POST['user'];
	$passw=$_POST['passw'];
	
    $identifiant= $_POST['id'];
    $motDePasse=$_POST['motDePasse'];
	
	$servername = "localhost";
    $username = $user;
    $password = $passw;
    $dbname = "harmonie";
	
    //  connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // test connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlSearch = "SELECT Count(*) FROM comite WHERE comite.id='$identifiant'";
    if (mysqli_query($conn, $sqlSearch)) {
        $sqlInsert = "INSERT INTO connexion (identifiant,motDePasse)
        VALUES ('$identifiant',"'.mysql_escape_string(md5($motDePasse)).'")";
        // exécution de la requête
        if (mysqli_query($conn, $sqlInsert)) {
            echo "Un nouveau modèle est saisi ou déjà saisi";
        } else {
            echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "La personne ne fait pas partie du Comité et ne peut donc pas faire parti des Administrateurs.";
    }
?>