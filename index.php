<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="http://necolas.github.io/normalize.css/2.1.2/normalize.css">
		<script src="dropzone.min.js"></script>
		<style type="text/css">
			#photos {
				
			}
			img {
				display: inline-block;
				width: 135px;
				height: auto;
				float: left;
				margin: 36px;
				border: 1px solid rgba(0,0,0,0.1);
			}
			img:hover{
				-moz-box-shadow: 1px 1px 4px rgba(0,0,0,0.16);
				-webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.16);
				box-shadow: 1px 1px 4px rgba(0,0,0,0.16);

				-webkit-transform: scale(1.5,1.5);
			    -moz-transform:scale(1.5,1.5);
			    opacity: 1;
			    -webkit-opacity: 1;
			    -moz-opacity: 1;			
			}
		</style>
	</head>
 
<body>
	<?php
		$files = glob('uploads/*'); // Define the directory.
		$viewer = "viewer.php?image=";

		natcasesort($files); // Sort
		echo "<div id='container'>"; // Wrap the images in a html container.
		foreach($files as $file) { // Loops through the array of files in the directory
			echo '<a href="'. $viewer. substr($file, 8) . '"file"><img src="' . $file . '" alt="Don\'t worry, be happy" /></a>'; //Insert all of the images in the html document
 		}
	?>
</body>
</html>