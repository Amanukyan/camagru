<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CAMAGRU</title>

<link rel="stylesheet" href="style.css" />

  



</head>
  
<body>
<div id="container">


    <video autoplay="true" id="video"> </video>

	<img id="myImg" src="#" />

    <br/>
    <br/>

    <input type='file' id="imgInp" />




    <br/>
    <br/>


    <form method="post" action="image.php">

	  	
		  <label>
		    <input  type="radio" name="choice" value="heart"  onclick="check()"  />
		    <img class="choiceImg"  src="img/heart.png">
		  </label>
		  
		  <label>
		    <input type="radio" name="choice" value="glasses" onclick="check()" />
		    <img class="choiceImg" src="img/glasses.png">
		  </label>
		  
		  <label>
		    <input  type="radio" name="choice" value="hand"  onclick="check()" />
		    <img class="choiceImg" src="img/hand.png">
		  </label>
		  
		  <label>
		    <input  type="radio" name="choice" value="tablet"  onclick="check()" />
		    <img class="choiceImg" src="img/tablet.png">
		  </label>

		   <label>
		    <input  type="radio" name="choice" value="funny-glasses"  onclick="check()" />
		    <img class="choiceImg" src="img/funny-glasses.png">
		  </label>


    	<input type="hidden" name="imgData" id="imgData" />
		<input type="submit" disabled="disabled" value="Choose a picture" id="startbutton" />
	</form>


	<canvas id="canvas"></canvas>

	<?php 
			
			if (file_exists("newImg.png"))
				echo " <img src='newImg.png' id='photo' alt='photo'> ";
	?>

</div>

<script   src="webcam.js"> </script>

</body>
</html>



  





