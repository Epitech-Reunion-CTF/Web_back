<?php

if(isset($_POST['submit'])) {
	$target_dir = "./";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Vérification si le fichier est une image
	// Vérification si $uploadOk est égal à 0 pour détecter une erreur
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	    echo "Le fichier ". basename( $_FILES["file"]["name"]). " a été envoyé.";
	} else {
	    echo "Désolé, une erreur est survenue lors de l'envoi de votre fichier.";
	}
}

?>