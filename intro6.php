<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intro 6</title>
	<meta name="description" content="PHP and MySQL - 07/04/14 - Introduction 6">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Introduction #6</h1>
		<ul>
			<?php
				$A = array(2,3,'hello');
				foreach($A as $value){
					echo "<li>" . $value . "</li>";
				}
			?>
		</ul>
	</div>
</div>
</body>
</html>