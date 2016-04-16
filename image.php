<?php
header ("Content-type: image/png"); 



if ( $_POST['choice'] == "tablet" )
	$source = imagecreatefrompng("tablet.png"); 
else if ( $_POST['choice'] == "glasses" )
	$source = imagecreatefrompng("glasses.png"); 
else if ( $_POST['choice'] == "hand" )
	$source = imagecreatefrompng("hand.png"); 
else if ( $_POST['choice'] == "tablet" )
	$source = imagecreatefrompng("tablet.png"); 
else if ( $_POST['choice'] == "heart" )
	$source = imagecreatefrompng("heart.png"); 


$destination = imagecreatefrompng($_POST['imgData']); 

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);



imagecopy($destination, $source, 0, 0, 0, 0, $largeur_source, $hauteur_source);

// On affiche l'image de destination 
imagepng($destination , "newImg.png");




header('Location: index.php')



?>