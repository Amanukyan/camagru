<?php
header ("Content-type: image/png"); 



if ( $_POST['choice'] == "tablet" )
	$source = imagecreatefrompng("img/tablet.png"); 
else if ( $_POST['choice'] == "glasses" )
	$source = imagecreatefrompng("img/glasses.png"); 
else if ( $_POST['choice'] == "hand" )
	$source = imagecreatefrompng("hand.png"); 
else if ( $_POST['choice'] == "funny-glasses" )
	$source = imagecreatefrompng("img/funny-glasses.png");
else if ( $_POST['choice'] == "heart" )
	$source = imagecreatefrompng("img/heart.png"); 


$destination = imagecreatefrompng($_POST['imgData']); 

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

$x = $largeur_destination/2 - $largeur_source/2;
$y = $hauteur_destination/2 - $hauteur_source/2;


imagecopy($destination, $source, $x, $y, 0 , 0, $largeur_source, $hauteur_source);

// On affiche l'image de destination 
imagepng($destination , "newImg.png");




header('Location: index.php')



?>