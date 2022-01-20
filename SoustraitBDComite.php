<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
	$user=$_POST['user'];
	$passw=$_POST['passw'];
	$titre=$_POST['titre'];
	
	
    //  connection
    // test connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM comite
	WHERE nom='$nom' AND prenom='$prenom' AND titre='$titre'";
    // exécution de la requête
    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>