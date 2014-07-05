<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intro 4</title>
	<meta name="description" content="PHP and MySQL - 07/04/14 - Introduction 4">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Introduction #4</h1>
		<?php
			for($i=5; $i<=1000000; $i++){
				if($i%5==0){
					echo "<p>" . $i . "</p>";
				}
			}
		?>
	</div>
</div>
</body>
</html>