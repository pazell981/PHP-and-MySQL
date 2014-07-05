<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intro 1</title>
	<meta name="description" content="PHP and MySQL - 07/04/14 - Introduction 1">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Introduction #1</h1>
		<?php
			for($i=1; $i<=1000; $i++){
				if($i%2!==0){
					echo "<p>" . $i . "</p>";
				}
			}
		?>
	</div>
</div>
</body>
</html>