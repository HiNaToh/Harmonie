<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
	$date_de_naissance=$_POST['date_de_naissance'];
	$user=$_POST['user'];
	$passw=$_POST['passw'];
	$profession=$_POST['profession'];
	$titre=$_POST['titre'];
	$telephone=$_POST['telephone'];
	$rue=$_POST['rue'];
	$code_postal=$_POST['code_postal'];
	$ville=$_POST['ville'];
	
	include("connect.php");
	
    //  connection
    $conn = new mysqli(SERVEUR, LOGIN, MDP, BDD);
    // test connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE INTO comite (nom , prenom,titre, date_de_naissance, profession,telephone,rue,code_postal,ville)
	VALUES ('$nom', '$prenom','$titre','$date_de_naissance', '$profession',$telephone,'$rue',$code_postal,'$ville')";
    // exécution de la requête
    if (mysqli_query($conn, $sql)) {
        header("Location: Comite.php");
		exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>