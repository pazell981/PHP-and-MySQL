<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intro 3</title>
	<meta name="description" content="PHP and MySQL - 07/04/14 - Introduction 3">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Introduction #3</h1>
		<?php
			$A = array(1, 2, 5, 10, 255, 3);
			$sum = 0;
			foreach($A as $value){
				$sum += $value;
			}
			echo "The average for the array is " . $sum/count($A);
		?>
	</div>
</div>
</body>
</html>