<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intermediate 1</title>
	<meta name="description" content="PHP and MySQL - 07/06/14 - Intermediate 1">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Intermediate 1 - Draw Stars</h1>
		<?php
			function draw_stars($array){
				for($i=0; $i < count($array); $i++){
					echo "<p>";
					for($j = 0; $j < $array[$i]; $j++){
						echo "*";
					}
					echo "</p>";
				}
			}
			function draw_char($array){
				for($i = 0; $i < count($array); $i++){
					if(is_numeric($array[$i])){
						echo "<p>";
						for($j = 0; $j < $array[$i]; $j++){
							echo "*";
						}
						echo "</p>";
					} else {
						$temp = str_split($array[$i]);
						$char = strtolower($temp[0]);
						echo "<p>";
						for($j = 0; $j < count($temp); $j++){
							echo($char);
						}
						echo "</p>";
					}
				}
			}
			$x = array(4, 6, 1, 3, 5, 7, 25);
			$y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
			draw_stars($x);
			draw_char($y);
		?>
	</div>
</div>
</body>
</html>