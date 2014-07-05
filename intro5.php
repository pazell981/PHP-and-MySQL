<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intro 5</title>
	<meta name="description" content="PHP and MySQL - 07/04/14 - Introduction 5">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Introduction #5</h1>
		<?php
			function multiply($array, $m){
				for($i=0; $i<count($array); $i++){
					$array[$i] = $array[$i]*$m;
				}
				return $array;
			}
			$A = array(2, 4, 10, 16);
			$B = array();
			$B = multiply($A, 5);
			echo "The multiplied array is ";
			var_dump($B);
		?>
	</div>
</div>
</body>
</html>