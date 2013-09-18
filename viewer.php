<?php
    $filename = $_GET['image'];
?>
<html>
    <head>
	<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
			<link rel="stylesheet" type="text/css" href="http://necolas.github.io/normalize.css/2.1.2/normalize.css">
			<script src="dropzone.min.js"></script>
			<style type="text/css">
				img {
					width: 25%;
					height: auto;
					margin: 36px;
					border: 1px solid rgba(0,0,0,0.1);

				    display: block;
				    margin: 100 auto;
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
        <img src="uploads/<?=$filename;?>" />
    </body>
</html>