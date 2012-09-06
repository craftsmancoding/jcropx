<?php

/**
 * Jcrop image cropping plugin for jQuery
 * Example cropping script
 * @copyright 2008-2009 Kelly Hallman
 * More info: http://deepliquid.com/content/Jcrop_Implementation_Theory.html
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$targ_w = $_POST['w2'];
	$targ_h = $_POST['h2'];
	$jpeg_quality = 90;

	$src = 'images/pool.jpg';
	$img_r = imagecreatefromjpeg($src);
	$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

	imagecopyresampled($dst_r,$img_r,0,0,$_POST['x2'],$_POST['y2'],
	$targ_w,$targ_h,$_POST['w2'],$_POST['h2']);

	header('Content-type: image/jpeg');
	imagejpeg($dst_r,null,$jpeg_quality);

	exit;
}

// If not a POST request, display page below:

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.Jcrop.js"></script>
		<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />


    <script type="text/javascript">

	  
			$(function(){

				$('#cropbox').Jcrop({
					onChange:   showCoords,
			        onSelect:   showCoords,
			        onRelease:  clearCoords
				});

			});

			 function showCoords(c)
		    {
		      $('#x1, #x2').val(c.x);
		      $('#y1, #y2').val(c.y);
		      $('#w1, #w2').val(c.w);
		      $('#h1, #h2').val(c.h);
		    };

		    function clearCoords()
		    {
		      $('#coords input').val('');
		    };

    </script>

	</head>

	<body>

	<div id="outer">
	<div class="jcExample">
	<div class="article">

		<h1>Jcrop - Test</h1>

		<!-- This is the image we're attaching Jcrop to -->
		<img src="images/pool.jpg" id="cropbox" />

		<!-- This is the form that our event handler fills -->
		<form action="index.php" method="post" onsubmit="return checkCoords();">
			<input type="hidden" id="x2" name="x2" />
			<input type="hidden" id="y2" name="y2" />
			<input type="hidden" id="w2" name="w2" />
			<input type="hidden" id="h2" name="h2" />
			<input type="submit" value="Crop Image" />
		</form>

		
	    <form id="coords"
	      class="coords"
	      onsubmit="return false;"
	      action="#">

	      <div>
	      <label>X1 <input type="text" size="4" id="x1" name="x1" /></label>
	      <label>Y1 <input type="text" size="4" id="y1" name="y1" /></label>
	      <label>W1 <input type="text" size="4" id="w1" name="w1" /></label>
	      <label>H1 <input type="text" size="4" id="h1" name="h1" /></label>
	      </div>
	    </form>

	</div>
	</div>
	</div>
	</body>

</html>
